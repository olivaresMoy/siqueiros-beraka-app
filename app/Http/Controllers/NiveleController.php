<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivele;
use App\Models\Institucione;
use App\Http\Requests\SaveNivelRequest;

class NiveleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado
        $niveles = Nivele::all();
        $institutos = Institucione::all();

        return view('configuraciones/niveles',[
            'niveles' => $niveles,
            'instituciones' => $institutos
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
    public function store(SaveNivelRequest $request)
    {
        //
        $varsNivel = array(
            'nombre' => $request->input("nombre"),
            'institucione_id' => $request->input("institucione_id"),
        );
        Nivele::create($varsNivel);
        return redirect()->route('niveles');
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
    public function update(SaveNivelRequest $request)
    {
        //
        $nivel = Nivele::findOrFail($request->input('idUpdate'));

        $varsNivel = array(
            'nombre' => $request->input("nombre"),
            'institucione_id' => $request->input("institucione_id"),
        );
        $nivel->update($varsNivel);
        return redirect()->route('niveles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $nivel = Nivele::findOrFail($id);
        $nivel->delete();

        return redirect()->route('niveles');
    }
}
