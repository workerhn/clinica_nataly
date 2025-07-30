<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Doctor;
use App\Models\Cita;
use App\Models\Pago;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $totalPacientes = Paciente::count();
        $totalDoctores = Doctor::count();
        $citasHoy = Cita::whereDate('fecha_hora', Carbon::today())->count();
        $totalPagosHoy = Pago::whereDate('created_at', Carbon::today())->count();
        $citasProximas = Cita::where('fecha_hora', '>=', Carbon::now())
            ->orderBy('fecha_hora')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalPacientes',
            'totalDoctores',
            'citasHoy',
            'totalPagosHoy',
            'citasProximas'
        ));
    }
}
