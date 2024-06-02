@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Marcas</h1>
    <a href="{{ route('marcas.create') }}" class="btn btn-primary">Agregar Marca</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $marca)
            <tr>
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->nombre }}</td>
                <td>
                    <a href="{{ route('marcas.edit', $marca) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('marcas.destroy', $marca) }}" method="POST" style="display:inline-block;">
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