@extends('layouts.app')

@section('title', 'Editar Paciente')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Editar Paciente</h2>

    <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
        @csrf
        @method('PUT')

        @include('pacientes.form')

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
