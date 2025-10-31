@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Historial de Aires Acondicionados</h1>

    <a href="{{ route('historial-aires.create') }}" class="btn btn-primary mb-3">+ Nuevo Registro</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered text-center">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Aire Acondicionado</th>
                <th>Fecha</th>
                <th>Temperatura</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historiales as $historial)
                <tr>
                    <td>{{ $historial->id }}</td>
                    <td>{{ $historial->aireAcondicionado->nombre ?? 'Sin asignar' }}</td>
                    <td>{{ $historial->fecha }}</td>
                    <td>{{ $historial->temperatura }} °C</td>
                    <td>
                        @if ($historial->estado)
                            <span class="badge bg-success">Encendido</span>
                        @else
                            <span class="badge bg-secondary">Apagado</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('historial-aires.edit', $historial->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('historial-aires.destroy', $historial->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro que querés eliminar este registro?')">
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
