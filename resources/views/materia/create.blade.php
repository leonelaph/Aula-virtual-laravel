@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Materia</h1>

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Materia</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
