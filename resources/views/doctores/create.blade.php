@extends('layouts.app')

@section('title', 'Nuevo Doctor')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Registrar Nuevo Doctor</h2>

    <form action="{{ route('doctores.store') }}" method="POST">
        @csrf
        @include('doctores.form')

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('doctores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
