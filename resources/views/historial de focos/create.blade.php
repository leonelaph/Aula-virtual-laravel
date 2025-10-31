@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Registro al Historial de Focos</h1>

    <form action="{{ route('historial-focos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="foco_id" class="form-label">Foco</label>
            <select name="foco_id" id="foco_id" class="form-control" required>
                @foreach ($focos as $foco)
                    <option value="{{ $foco->id }}">{{ $foco->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Encendido">Encendido</option>
                <option value="Apagado">Apagado</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_hora" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('historial-focos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
