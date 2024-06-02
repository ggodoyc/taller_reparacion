@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($marca) ? 'Editar Marca' : 'Agregar Marca' }}</h1>
    <form action="{{ isset($marca) ? route('marcas.update', $marca) : route('marcas.store') }}" method="POST">
        @csrf
        @if(isset($marca))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ isset($marca) ? $marca->nombre : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($marca) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>
@endsection
