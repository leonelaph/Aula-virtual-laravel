@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Agregar Registro al Historial</h1>

    <form action="{{ route('historial-aires.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="aire_acondicionado_id" class="form-label">Aire Acondicionado</label>
            <select name="aire_acondicionado_id" id="aire_acondicionado_id" class="form-select" required>
                <option value="">-- Seleccioná un aire --</option>
                @foreach ($aires as $aire)
                    <option value="{{ $aire->id }}">{{ $aire->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="temperatura" class="form-label">Temperatura (°C)</label>
            <input type="number" name="temperatura" id="temperatura" class="form-control" step="0.1" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="0">Apagado</option>
                <option value="1">Encendido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('historial-aires.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
