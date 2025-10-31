@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Disponibilidad</h1>
    <form action="{{ route('disponibilidades.update',$disponibilidad) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Aula</label>
            <select name="aula_id" class="form-control">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}" {{ $disponibilidad->aula_id==$aula->id?'selected':'' }}>
                        {{ $aula->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3"><label>Día</label><input type="text" name="dia" value="{{ $disponibilidad->dia }}" class="form-control"></div>
        <div class="mb-3"><label>Hora Inicio</label><input type="time" name="hora_inicio" value="{{ $disponibilidad->hora_inicio }}" class="form-control"></div>
        <div class="mb-3"><label>Hora Fin</label><input type="time" name="hora_fin" value="{{ $disponibilidad->hora_fin }}" class="form-control"></div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('disponibilidades.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
