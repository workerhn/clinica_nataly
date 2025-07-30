<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>@yield('title', 'Dashboard')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40"
          class="d-inline-block align-text-top" />
        Clínica Médica
      </a>
      <div class="d-flex">
        @if(auth()->check())
      <span class="navbar-text me-3 text-white">Hola, {{ auth()->user()->name }}</span>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-light btn-sm">Cerrar sesión</button>
      </form>
      @else
        <span class="navbar-text me-3 text-white">Hola, invitado</span>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Iniciar sesión</a>
      @endif
        <!-- <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light btn-sm">Cerrar sesión</button>
        </form> -->
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-3">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="{{ route('pacientes.index') }}" class="nav-link">Pacientes</a></li>
          <li class="nav-item"><a href="{{ route('doctores.index') }}" class="nav-link">Doctores</a></li>
          <li class="nav-item"><a href="{{ route('citas.index') }}" class="nav-link">Citas</a></li>
           <li class="nav-item"><a href="{{ route('pagos.index') }}" class="nav-link">Pagos</a></li>
        </ul>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        @yield('content')
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>