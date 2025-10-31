@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Materia</h1>

    <form action="{{ route('materias.update', $materia) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Materia</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $materia->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{ $materia->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
