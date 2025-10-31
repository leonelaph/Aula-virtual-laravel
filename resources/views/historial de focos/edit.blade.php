@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Registro del Historial de Focos</h1>

    <form action="{{ route('historial-focos.update', $historial) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="foco_id" class="form-label">Foco</label>
            <select name="foco_id" id="foco_id" class="form-control" required>
                @foreach ($focos as $foco)
                    <option value="{{ $foco->id }}" {{ $historial->foco_id == $foco->id ? 'selected' : '' }}>
                        {{ $foco->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Encendido" {{ $historial->estado == 'Encendido' ? 'selected' : '' }}>Encendido</option>
                <option value="Apagado" {{ $historial->estado == 'Apagado' ? 'selected' : '' }}>Apagado</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_hora" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($historial->fecha_hora)) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('historial-focos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
