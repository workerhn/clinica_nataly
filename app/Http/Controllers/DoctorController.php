<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $doctores = Doctor::all();
        return view('doctores.index', compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'especialidad' => 'required',
        ]);

        Doctor::create($request->all());
        return redirect()->route('doctores.index')->with('success', 'Doctor creado correctamente');
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
        return view('doctores.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'especialidad' => 'required',
        ]);

        $doctor->update($request->all());
        return redirect()->route('doctores.index')->with('success', 'Doctor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $doctor->delete();
    return redirect()->route('doctores.index')->with('success', 'Doctor eliminado');
    }
}
