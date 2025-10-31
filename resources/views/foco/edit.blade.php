@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Foco</h1>

    <form action="{{ route('focos.update', $foco->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del foco</label>
            <input type="text" name="nombre" id="nombre" class="form-control"
                value="{{ old('nombre', $foco->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="0" {{ $foco->estado == 0 ? 'selected' : '' }}>Apagado</option>
                <option value="1" {{ $foco->estado == 1 ? 'selected' : '' }}>Encendido</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <select name="aula_id" id="aula_id" class="form-select">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}" {{ $foco->aula_id == $aula->id ? 'selected' : '' }}>
                        {{ $aula->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('focos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
