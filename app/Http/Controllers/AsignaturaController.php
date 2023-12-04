<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Grupo;
use App\Models\Docente;
use App\Http\Requests\SaveAsignaturaRequest;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado
        $asignaturas = Asignatura::all();
        $docentes = Docente::all();
        $grupos = Grupo::all();

        return view('configuraciones/asignaturas',[
            'asignaturas' => $asignaturas,
            'docentes' => $docentes,
            'grupos' => $grupos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveAsignaturaRequest $request)
    {
        //
        $varsAsignatura = array(
            'nombre' => $request->input("nombre"),
            'docente_id' => $request->input("docente_id"),
        );
        $id = Asignatura::create($varsAsignatura)->id;
        $newAsign = Asignatura::findOrFail($id);
        $newAsign->Grupos()->attach($request->input("grupo_id"));
        return redirect()->route('asignaturas');
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
    public function update(SaveAsignaturaRequest $request)
    {
        //
        $asignatura = Asignatura::findOrFail($request->input('idAsignaturaUpdate'));

        $varsAsignatura = array(
            'nombre' => $request->input("nombre"),
            'docente_id' => $request->input("docente_id"),
        );
        $asignatura->update($varsAsignatura);
        $asignatura->Grupos()->sync($request->input("grupo_id"));
        return redirect()->route('asignaturas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();

        return redirect()->route('asignaturas');
    }
}
