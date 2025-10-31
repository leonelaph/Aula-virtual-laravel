@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Focos</h1>

    <a href="{{ route('focos.create') }}" class="btn btn-primary mb-3">+ Agregar Foco</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered text-center">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Aula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($focos as $foco)
                <tr>
                    <td>{{ $foco->id }}</td>
                    <td>{{ $foco->nombre }}</td>
                    <td>
                        @if ($foco->estado)
                            <span class="badge bg-success">Encendido</span>
                        @else
                            <span class="badge bg-secondary">Apagado</span>
                        @endif
                    </td>
                    <td>{{ $foco->aula->nombre ?? 'Sin asignar' }}</td>
                    <td>
                        <a href="{{ route('focos.edit', $foco->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('focos.destroy', $foco->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro que querés eliminar este foco?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
