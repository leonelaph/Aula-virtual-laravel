@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Horarios</h1>
    <a href="{{ route('horarios.create') }}" class="btn btn-primary mb-3">Nuevo Horario</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Docente</th>
                <th>Aula</th>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horarios as $horario)
                <tr>
                    <td>{{ $horario->id }}</td>
                    <td>{{ $horario->materia->nombre ?? 'Sin materia' }}</td>
                    <td>{{ $horario->docente->nombre ?? 'Sin docente' }}</td>
                    <td>{{ $horario->aula->nombre ?? 'Sin aula' }}</td>
                    <td>{{ $horario->dia }}</td>
                    <td>{{ $horario->hora_inicio }}</td>
                    <td>{{ $horario->hora_fin }}</td>
                    <td>
                        <a href="{{ route('horarios.edit', $horario) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('horarios.destroy', $horario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
