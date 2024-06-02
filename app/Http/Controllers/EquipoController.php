<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Marca;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $marcas = Marca::all();
        return view('equipos.create', compact('clientes', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'marca_id' => 'required|exists:marcas,id',
            'tipo' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255',
            'fecha_recepcion' => 'required|date',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        $clientes = Cliente::all();
        $marcas = Marca::all();
        return view('equipos.edit', compact('equipo', 'clientes', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'marca_id' => 'required|exists:marcas,id',
            'tipo' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255',
            'fecha_recepcion' => 'required|date',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }
}
