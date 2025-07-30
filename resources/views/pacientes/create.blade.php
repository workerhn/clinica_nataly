@extends('layouts.app')

@section('title', 'Nuevo Paciente')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Registrar Nuevo Paciente</h2>

    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf

        @include('pacientes.form')

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
