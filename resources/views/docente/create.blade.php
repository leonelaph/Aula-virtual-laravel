@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Docente</h1>

    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email.</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
