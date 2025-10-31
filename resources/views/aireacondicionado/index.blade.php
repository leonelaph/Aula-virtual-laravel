@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Aires Acondicionados</h1>
    <a href="{{ route('aire-acondicionados.create') }}" class="btn btn-primary mb-3">Nuevo Aire</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Temperatura</th>
                <th>Aula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aireAcondicionados as $aire)
                <tr>
                    <td>{{ $aire->id }}</td>
                    <td>{{ $aire->nombre }}</td>
                    <td>{{ $aire->estado }}</td>
                    <td>{{ $aire->temperatura }} °C</td>
                    <td>{{ $aire->aula->nombre ?? 'Sin asignar' }}</td>
                    <td>
                        <a href="{{ route('aire-acondicionados.edit', $aire) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('aire-acondicionados.destroy', $aire) }}" method="POST" style="display:inline;">
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
