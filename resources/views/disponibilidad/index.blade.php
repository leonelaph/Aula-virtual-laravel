@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Disponibilidades</h1>
    <a href="{{ route('disponibilidades.create') }}" class="btn btn-primary mb-3">Nueva Disponibilidad</a>

    <table class="table table-bordered">
        <tr>
            <th>Aula</th><th>Día</th><th>Hora Inicio</th><th>Hora Fin</th><th>Acciones</th>
        </tr>
        @foreach ($disponibilidades as $disp)
        <tr>
            <td>{{ $disp->aula->nombre ?? 'Sin aula' }}</td>
            <td>{{ $disp->dia }}</td>
            <td>{{ $disp->hora_inicio }}</td>
            <td>{{ $disp->hora_fin }}</td>
            <td>
                <a href="{{ route('disponibilidades.edit',$disp) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('disponibilidades.destroy',$disp) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
