@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary">Agregar Servicio</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Equipo</th>
                <th>Técnico</th>
                <th>Estado</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->cliente->nombre }}</td>
                <td>{{ $servicio->equipo->modelo }}</td>
                <td>{{ $servicio->tecnico->nombre }}</td>
                <td>{{ $servicio->estado }}</td>
                <td>{{ $servicio->fecha_inicio }}</td>
                <td>{{ $servicio->fecha_fin }}</td>
                <td>
                    <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline-block;">
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
