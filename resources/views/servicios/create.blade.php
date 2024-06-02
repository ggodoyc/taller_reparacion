@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Servicio</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
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
            <label for="equipo_id">Equipo</label>
            <select name="equipo_id" class="form-control">
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->modelo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select name="tecnico_id" class="form-control">
                @foreach($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}">{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control" >
                <option value="recibido">Recibido</option>
                <option value="reparando">Reparando</option>
                <option value="finalizado">Finalizado</option>
                <option value="entregado">Entregado</option>
            </select>
            <input type="text" name="estado" class="form-control" value="{{ old('estado') }}">
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" value="{{ old('fecha_inicio') }}">
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
