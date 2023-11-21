<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    // Controla rutas de navegación
    public function login()
    {
        return view('login');
    }
    public function inicio()
    {
        return view('welcome');
    }
    public function instituto()
    {
        return view('configuraciones/instituto');
    }
}
