@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Cortinas</h1>
    <a href="{{ route('cortinas.create') }}" class="btn btn-primary mb-3">Nueva Cortina</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Aula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cortinas as $cortina)
                <tr>
                    <td>{{ $cortina->id }}</td>
                    <td>{{ $cortina->nombre }}</td>
                    <td>{{ $cortina->estado }}</td>
                    <td>{{ $cortina->aula->nombre ?? 'Sin aula' }}</td>
                    <td>
                        <a href="{{ route('cortinas.edit', $cortina) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('cortinas.destroy', $cortina) }}" method="POST" style="display:inline;">
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
