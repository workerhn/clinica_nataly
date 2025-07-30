@extends('layouts.app')

@section('title', 'Editar Doctor')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Editar Doctor</h2>

    <form action="{{ route('doctores.update', $doctor) }}" method="POST">
        @csrf
        @method('PUT')

        @include('doctores.form')

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('doctores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
