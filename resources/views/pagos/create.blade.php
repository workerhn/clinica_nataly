@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Registrar Cobro</h2>
        <form action="{{ route('pagos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="paciente_id" class="form-label">Paciente</label>
                <select name="paciente_id" id="paciente_id" class="form-control" required>
                    <option value="">Seleccione un paciente</option>
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" step="0.01" name="monto" id="monto" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="metodo_pago" class="form-label">Método de Pago</label>
                <select name="metodo_pago" id="metodo_pago" class="form-control" required>
                    <option value="">Seleccione un método</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Tarjeta de Credito">Tarjeta de Crédito</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_pago" class="form-label">Fecha de Pago</label>
                <input type="date" name="fecha_pago" id="fecha_pago" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Cobro</button>
        </form>
    </div>
@endsection