@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Aula</h1>

    <form action="{{ route('aulas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Aula</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" name="capacidad" id="capacidad" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
