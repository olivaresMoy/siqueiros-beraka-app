<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucione;
use App\Http\Requests\SaveInstitutoRequest;

class InstitucioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado
        $instituto = Institucione::all();

        return view('configuraciones/instituto',[
            'instituciones' => $instituto
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
    public function store(SaveInstitutoRequest $request)
    {
        //
        $varsInstituto = array(
            'nombre' => $request->input("nombre"),
            'cct' => $request->input("cct"),
            'zona' => $request->input("zona"),
            'telefono' => $request->input("telefono"),
            'direccion' => $request->input("direccion"),
            'director' => $request->input("director"),
            'ciclo' => $request->input("ciclo"),
        );
        Institucione::create($varsInstituto);
        return redirect()->route('instituto');
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
    public function update(SaveInstitutoRequest $request)
    {
        //
        $Instituto = Institucione::findOrFail($request->input('id'));

        $varsInstituto = array(
            'nombre' => $request->input("nombre"),
            'cct' => $request->input("cct"),
            'zona' => $request->input("zona"),
            'telefono' => $request->input("telefono"),
            'direccion' => $request->input("direccion"),
            'director' => $request->input("director"),
            'ciclo' => $request->input("ciclo"),
        );
        $Instituto->update($varsInstituto);
        return redirect()->route('instituto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $instituto = Institucione::findOrFail($id);
        $instituto->delete();

        return redirect()->route('instituto');
    }
}