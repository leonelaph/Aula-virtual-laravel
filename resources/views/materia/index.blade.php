@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Materias</h1>
    <a href="{{ route('materias.create') }}" class="btn btn-primary mb-3">Nueva Materia</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->descripcion }}</td>
                    <td>
                        <a href="{{ route('materias.edit', $materia) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('materias.destroy', $materia) }}" method="POST" style="display:inline;">
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
