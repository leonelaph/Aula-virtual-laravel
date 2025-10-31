@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cortina</h1>

    <form action="{{ route('cortinas.update', $cortina) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Cortina</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cortina->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Abierta" {{ $cortina->estado == 'Abierta' ? 'selected' : '' }}>Abierta</option>
                <option value="Cerrada" {{ $cortina->estado == 'Cerrada' ? 'selected' : '' }}>Cerrada</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <select name="aula_id" id="aula_id" class="form-control">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}" {{ $cortina->aula_id == $aula->id ? 'selected' : '' }}>
                        {{ $aula->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('cortinas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
