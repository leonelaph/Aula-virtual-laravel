@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Focos</h1>
    <a href="{{ route('historial-focos.create') }}" class="btn btn-primary mb-3">Agregar nuevo registro</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foco</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historiales as $historial)
                <tr>
                    <td>{{ $historial->id }}</td>
                    <td>{{ $historial->foco->nombre ?? 'Sin foco' }}</td>
                    <td>{{ $historial->fecha }}</td>
                    <td>{{ $historial->estado ? 'Encendido' : 'Apagado' }}</td>
                    <td>
                        <a href="{{ route('historial-focos.edit', $historial->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('historial-focos.destroy', $historial->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
