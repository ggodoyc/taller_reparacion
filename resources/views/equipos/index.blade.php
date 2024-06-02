@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary">Agregar Equipo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Número de Serie</th>
                <th>Fecha de Recepción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->cliente->nombre }}</td>
                <td>{{ $equipo->marca->nombre }}</td>
                <td>{{ $equipo->tipo }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td>{{ $equipo->numero_serie }}</td>
                <td>{{ $equipo->fecha_recepcion }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
