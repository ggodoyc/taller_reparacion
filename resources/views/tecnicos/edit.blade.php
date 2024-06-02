@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Técnico</h1>
    <form action="{{ route('tecnicos.update', $tecnico) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $tecnico->nombre }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $tecnico->telefono }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $tecnico->email }}">
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" value="{{ $tecnico->especialidad }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
