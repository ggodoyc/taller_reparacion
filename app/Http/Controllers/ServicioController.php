<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Tecnico;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.create', compact('clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'equipo_id' => 'required|exists:equipos,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'estado' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
        ]);

        Servicio::create($request->all());

        return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.edit', compact('servicio', 'clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'equipo_id' => 'required|exists:equipos,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'estado' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
        ]);

        $servicio->update($request->all());

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
    }
}
