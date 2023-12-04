<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivele;
use App\Models\Grupo;
use App\Http\Requests\SaveGrupoRequest;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado
        $niveles = Nivele::all();
        $grupos = Grupo::all();

        return view('configuraciones/grupos',[
            'niveles' => $niveles,
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
    public function store(SaveGrupoRequest $request)
    {
        //
        $varsGrupo = array(
            'grado' => $request->input("grado"),
            'grupo' => $request->input("grupo"),
            'nivele_id' => $request->input("nivele_id"),
        );
        Grupo::create($varsGrupo);
        return redirect()->route('grupos');
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
    public function update(SaveGrupoRequest $request)
    {
        //
        $grupo = Grupo::findOrFail($request->input('idUpdate'));

        $varsGrupo = array(
            'grado' => $request->input("grado"),
            'grupo' => $request->input("grupo"),
            'nivele_id' => $request->input("nivele_id"),
        );
        $grupo->update($varsGrupo);
        return redirect()->route('grupos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();

        return redirect()->route('grupos');
    }
}
