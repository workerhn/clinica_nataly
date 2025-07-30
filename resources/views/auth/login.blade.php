<x-guest-layout>
    <div class="text-center mb-4">
        <img src="{{ asset('img/logo medico.png') }}" alt="Logo" style="width: 120px;">
    </div>

    <div class="container" style="max-width: 400px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Correo electrónico</label>
                <input id="email" class="form-control" type="email" name="email" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Contraseña</label>
                <input id="password" class="form-control" type="password" name="password" required />
            </div>

            @if (Route::has('register'))
                <div class="mt-2">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('¿No tienes cuenta? Regístrate') }}
                    </a>
                </div>
            @endif

            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">
                    Iniciar sesión
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
