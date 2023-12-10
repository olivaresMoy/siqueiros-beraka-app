<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacione;
use App\Models\Tarea;
use App\Models\Calificacione;
use App\Models\Asistencia;
use App\Models\Reporte;

class DataAppController extends Controller
{
    //
    function indexNotificaciones(Request $request){
        $notificaciones = Notificacione::all();
        
        return view('resources/notificaciones',[
            'notificaciones' => $notificaciones,
            'request' => $request,
        ]);
    }
    function indexTareas(Request $request){
        $tareas = Tarea::all();
        
        return view('resources/tareas',[
            'tareas' => $tareas,
            'request' => $request,
        ]);
    }
    function indexAsistencias(Request $request){
        $asistencias = Asistencia::all();
        
        return view('resources/asistencias',[
            'asistencias' => $asistencias,
            'request' => $request,
        ]);
    }
    function indexReportes(Request $request){
        $reportes = Reporte::all();
        
        return view('resources/reportes',[
            'reportes' => $reportes,
            'request' => $request,
        ]);
    }
    function indexCalificaciones(Request $request){
        $calificaciones = Calificacione::all();
        
        return view('resources/calificaciones',[
            'calificaciones' => $calificaciones,
            'request' => $request,
        ]);
    }
}
