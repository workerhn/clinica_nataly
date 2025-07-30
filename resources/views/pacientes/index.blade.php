@extends('layouts.app')

@section('title', 'Pacientes')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Pacientes</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3">Agregar Paciente</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Fecha de Nacimiento</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->apellido }}</td>
                    <td>{{ $paciente->dni }}</td>
                    <td>{{ $paciente->fecha_nacimiento }}</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>
                        <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este paciente?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
