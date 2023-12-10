<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacione;

class CalificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $calificaciones = Calificacione::with(['User' => ['Perfile'],'Asignatura' => ['Docente' => ['User' => ['Perfile']]]])->get();
        
        return response()->json($calificaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
