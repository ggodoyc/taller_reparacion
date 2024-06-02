<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnicos = Tecnico::all();
        return view('tecnicos.index', compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:tecnicos',
            'especialidad' => 'required|string|max:255',
        ]);

        Tecnico::create($request->all());

        return redirect()->route('tecnicos.index')->with('success', 'Técnico creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnico $tecnico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.edit', compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:tecnicos,email,' . $tecnico->id,
            'especialidad' => 'required|string|max:255',
        ]);


        $tecnico->update($request->all());

        return redirect()->route('tecnicos.index')->with('success', 'Técnico actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();

        return redirect()->route('tecnicos.index')->with('success', 'Técnico eliminado exitosamente.');
    }
}
