@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Servicio</h1>
    <form action="{{ route('servicios.update', $servicio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $servicio->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="equipo_id">Equipo</label>
            <select name="equipo_id" class="form-control">
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $servicio->equipo_id == $equipo->id ? 'selected' : '' }}>{{ $equipo->modelo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select name="tecnico_id" class="form-control">
                @foreach($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}" {{ $servicio->tecnico_id == $tecnico->id ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control">
                <option value="Recibido">Recibido</option>
                <option value="Reparando">Reparando</option>
                <option value="Finalizado">Finalizado</option>
                <option value="Entregado">Entregado</option>
            </select>
            {{-- <input type="text" name="estado" class="form-control" value="{{ $servicio->estado }}"> --}}
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" value="{{ $servicio->fecha_inicio }}">
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin') }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

