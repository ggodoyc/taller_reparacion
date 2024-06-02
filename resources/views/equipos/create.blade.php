@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select name="marca_id" class="form-control">
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{ old('tipo') }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{{ old('modelo') }}">
        </div>
        <div class="form-group">
            <label for="numero_serie">Número de Serie</label>
            <input type="text" name="numero_serie" class="form-control" value="{{ old('numero_serie') }}">
        </div>
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" name="fecha_recepcion" class="form-control" value="{{ old('fecha_recepcion') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
