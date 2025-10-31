<!-- resources/views/aulas/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aula</h1>

    <form action="{{ route('aulas.update', $aula) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Aula</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $aula->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" name="capacidad" id="capacidad" class="form-control" value="{{ $aula->capacidad }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection

