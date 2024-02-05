<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacione;
use App\Http\Requests\SaveNotificacionRequest;

class NotificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notificaciones = Notificacione::with('Role')->get();
        
        return response()->json($notificaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveNotificacionRequest $request)
    {
        //
        $varsNotificacion = array(
            'titulo' => $request->input("titulo"),
            'descripcion' => $request->input("descripcion"),
            'role_id' => $request->input("role_id"),
        );
        Notificacione::create($varsNotificacion);
        return redirect()->route('notificaciones');
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
    public function update(SaveNotificacionRequest $request)
    {
        //
        $notificacion = Notificacione::findOrFail($request->input('idNotificacionUpdate'));

        $varsNotificacion = array(
            'titulo' => $request->input("titulo"),
            'descripcion' => $request->input("descripcion"),
            'role_id' => $request->input("role_id"),
        );
        $notificacion->update($varsNotificacion);
        return redirect()->route('notificaciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $notificacion = Notificacione::findOrFail($id);
        $notificacion->delete();

        return redirect()->route('notificaciones');
    }
}
