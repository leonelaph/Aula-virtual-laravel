@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Registro del Historial</h1>

    <form action="{{ route('historial-aires.update', $historial->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="aire_acondicionado_id" class="form-label">Aire Acondicionado</label>
            <select name="aire_acondicionado_id" id="aire_acondicionado_id" class="form-select" required>
                @foreach ($aires as $aire)
                    <option value="{{ $aire->id }}" {{ $historial->aire_acondicionado_id == $aire->id ? 'selected' : '' }}>
                        {{ $aire->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control"
                value="{{ old('fecha', $historial->fecha) }}" required>
        </div>

        <div class="mb-3">
            <label for="temperatura" class="form-label">Temperatura (°C)</label>
            <input type="number" name="temperatura" id="temperatura" class="form-control"
                value="{{ old('temperatura', $historial->temperatura) }}" step="0.1" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="0" {{ $historial->estado == 0 ? 'selected' : '' }}>Apagado</option>
                <option value="1" {{ $historial->estado == 1 ? 'selected' : '' }}>Encendido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('historial-aires.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
