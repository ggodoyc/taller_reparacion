@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Técnico</h1>
    <form action="{{ route('tecnicos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" value="{{ old('especialidad') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
