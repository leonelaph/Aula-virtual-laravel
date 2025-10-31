@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Disponibilidad</h1>
    <form action="{{ route('disponibilidades.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Aula</label>
            <select name="aula_id" class="form-control">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3"><label>Día</label><input type="text" name="dia" class="form-control"></div>
        <div class="mb-3"><label>Hora Inicio</label><input type="time" name="hora_inicio" class="form-control"></div>
        <div class="mb-3"><label>Hora Fin</label><input type="time" name="hora_fin" class="form-control"></div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('disponibilidades.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
