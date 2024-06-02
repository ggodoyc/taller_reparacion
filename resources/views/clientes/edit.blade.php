@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($cliente) ? 'Editar Cliente' : 'Agregar Cliente' }}</h1>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ isset($cliente) ? $cliente->nombre : '' }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ isset($cliente) ? $cliente->telefono : '' }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ isset($cliente) ? $cliente->email : '' }}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ isset($cliente) ? $cliente->direccion : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($cliente) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>
@endsection