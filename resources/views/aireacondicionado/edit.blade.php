@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aire Acondicionado</h1>

    <form action="{{ route('aire-acondicionados.update', $aireAcondicionado) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Aire</label>
            <input type="text" name="nombre" id="nombre" class="form-control" 
                   value="{{ $aireAcondicionado->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Apagado" {{ $aireAcondicionado->estado == 'Apagado' ? 'selected' : '' }}>Apagado</option>
                <option value="Encendido" {{ $aireAcondicionado->estado == 'Encendido' ? 'selected' : '' }}>Encendido</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="temperatura" class="form-label">Temperatura</label>
            <input type="number" name="temperatura" id="temperatura" 
                   class="form-control" value="{{ $aireAcondicionado->temperatura }}" min="16" max="30" required>
        </div>

        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <select name="aula_id" id="aula_id" class="form-control">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}" {{ $aireAcondicionado->aula_id == $aula->id ? 'selected' : '' }}>
                        {{ $aula->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('aire-acondicionados.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
