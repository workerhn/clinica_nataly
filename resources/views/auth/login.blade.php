@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
<div class="card shadow p-4 mx-auto" style="max-width: 400px; background-color: rgba(255, 255, 255, 0.95); border-radius: 12px;">
    <div class="text-center mb-4">
        <img src="{{ asset('img/logo medico.png') }}" alt="Logo" style="width: 120px;">
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input id="email" class="form-control" type="email" name="email" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" class="form-control" type="password" name="password" required>
        </div>

        @if (Route::has('register'))
            <div class="mb-3">
                <a class="text-decoration-none" href="{{ route('register') }}">
                    ¿No tienes cuenta? Regístrate
                </a>
            </div>
        @endif

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>
</div>
@endsection
