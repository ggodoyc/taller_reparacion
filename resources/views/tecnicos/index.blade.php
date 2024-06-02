@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Técnicos</h1>
    <a href="{{ route('tecnicos.create') }}" class="btn btn-primary">Agregar Técnico</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnicos as $tecnico)
            <tr>
                <td>{{ $tecnico->id }}</td>
                <td>{{ $tecnico->nombre }}</td>
                <td>{{ $tecnico->telefono }}</td>
                <td>{{ $tecnico->email }}</td>
                <td>{{ $tecnico->especialidad }}</td>
                <td>
                    <a href="{{ route('tecnicos.edit', $tecnico) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tecnicos.destroy', $tecnico) }}" method="POST" style="display:inline-block;">
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
