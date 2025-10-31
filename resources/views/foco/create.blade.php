@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Foco</h1>

    <form action="{{ route('focos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Foco</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Apagado">Apagado</option>
                <option value="Encendido">Encendido</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <select name="aula_id" id="aula_id" class="form-control">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('focos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
