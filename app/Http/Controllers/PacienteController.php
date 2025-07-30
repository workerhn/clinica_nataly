<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'dni' => 'required|unique:pacientes',
        'fecha_nacimiento' => 'required|date',
    ]);

    Paciente::create($request->all());
    return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente');
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
         return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'dni' => 'required|unique:pacientes,dni,' . $paciente->id,
        'fecha_nacimiento' => 'required|date',
    ]);

        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $paciente->delete();
    return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado');
    }
}
