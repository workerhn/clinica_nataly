@extends('layouts.app')

@section('title', 'Nueva Cita')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Registrar Cita</h2>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        @include('citas.form')

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
