<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = Pago::with('paciente')->latest()->get();
        return view('pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        return view('pagos.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'monto' => 'required|numeric|min:0',
            'metodo_pago' => 'required|string|max:255',
            'fecha_pago' => 'required|date',
            'descripcion' => 'nullable|string|max:255',
        ]);

        Pago::create([
            'paciente_id' => $request->paciente_id,
            'monto' => $request->monto,
            'metodo_pago' => $request->metodo_pago,
            'fecha_pago' => $request->fecha_pago,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('pagos.index')->with('success', 'Cobro registrado correctamente.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
