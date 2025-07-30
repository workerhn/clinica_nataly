<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::with(['paciente', 'doctor'])->get();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        return view('citas.create', compact('pacientes', 'doctores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
            'fecha_hora' => 'required|date|after_or_equal:now',
            'motivo' => 'nullable|string'
        ]);

       Cita::create($request->only(['paciente_id', 'doctor_id', 'fecha_hora', 'motivo']));
        return redirect()->route('citas.index')->with('success', 'Cita registrada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $cita = Cita::findOrFail($id);
        return view('citas.edit', compact('cita', 'pacientes', 'doctores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
            'fecha_hora' => 'required|date|after_or_equal:now',
            'motivo' => 'nullable|string'
        ]);

        $cita = Cita::findOrFail($id);
        $cita->update($request->only(['paciente_id', 'doctor_id', 'fecha_hora', 'motivo']));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cita = Cita::findOrFail($id); // ✅ Recupera la cita
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada');
    }

}
