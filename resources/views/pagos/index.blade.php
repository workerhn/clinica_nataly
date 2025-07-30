@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Lista de Pagos</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">Registrar nuevo pago</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Monto</th>
                <th>Método de Pago</th>
                <th>Fecha de Pago</th>
                <th>Descripción</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td> {{ $pago->paciente->nombre ?? '' }} {{ $pago->paciente->apellido ?? '' }}</td>
                    <td>L {{ number_format($pago->monto, 2) }}</td>
                    <td>{{ $pago->metodo_pago }}</td>
                    <td>{{ $pago->fecha_pago }}</td>
                    <td>{{ $pago->descripcion }}</td>
                    <td>{{ $pago->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay pagos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection