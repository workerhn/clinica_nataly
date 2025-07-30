<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    
    <!-- Tarjetas resumen -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Pacientes</h5>
                    <p class="card-text fs-3">{{ $totalPacientes }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Doctores</h5>
                    <p class="card-text fs-3">{{ $totalDoctores }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Citas Hoy</h5>
                    <p class="card-text fs-3">{{ $citasHoy }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Pagos Hoy</h5>
                    <p class="card-text fs-3">L {{ number_format($totalPagosHoy, 2) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlaces rápidos -->
    <div class="mb-4">
        <a href="{{ route('citas.create') }}" class="btn btn-success me-2">➕ Nueva Cita</a>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary me-2">➕ Nuevo Paciente</a>
        <a href="{{ route('doctores.create') }}" class="btn btn-info">➕ Nuevo Doctor</a>
    </div>

    <!-- Citas próximas -->
    <div class="card">
        <div class="card-header">
            Próximas Citas
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Doctor</th>
                        <th>Especialidad</th>
                        <th>Fecha y Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citasProximas as $cita)
                        <tr>
                            <td>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                            <td>{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</td>
                            <td>{{ $cita->doctor->especialidad }}</td>
                            <td>{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay citas próximas</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
