@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $equipo->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select name="marca_id" class="form-control">
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ $equipo->marca_id == $marca->id ? 'selected' : '' }}>{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{ $equipo->tipo }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{{ $equipo->modelo }}">
        </div>
        <div class="form-group">
            <label for="numero_serie">Número de Serie</label>
            <input type="text" name="numero_serie" class="form-control" value="{{ $equipo->numero_serie }}">
        </div>
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" name="fecha_recepcion" class="form-control" value="{{ $equipo->fecha_recepcion }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
