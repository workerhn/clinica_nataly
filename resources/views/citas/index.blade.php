@extends('layouts.app')

@section('title', 'Citas Médicas')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Citas Médicas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Nueva Cita</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Paciente</th>
                <th>Doctor</th>
                <th>Fecha y Hora</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                    <td>{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</td>
                    <td>{{ $cita->fecha_hora }}</td>
                    <td>{{ $cita->motivo }}</td>
                    <td>
                        <a href="{{ route('citas.edit', $cita) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar esta cita?')">
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
