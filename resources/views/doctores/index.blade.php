@extends('layouts.app')

@section('title', 'Doctores')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Doctores</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('doctores.create') }}" class="btn btn-primary mb-3">Agregar Doctor</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctores as $doctor)
                <tr>
                    <td>{{ $doctor->nombre }}</td>
                    <td>{{ $doctor->apellido }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>{{ $doctor->telefono }}</td>
                    <td>
                        <a href="{{ route('doctores.edit', $doctor) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('doctores.destroy', $doctor) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este doctor?')">
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
