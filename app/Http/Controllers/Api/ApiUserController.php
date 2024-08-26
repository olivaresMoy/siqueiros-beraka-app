<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiUserController extends Controller
{
    // Login API (post)
    public function entrar(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])){
            $user = Auth::user();
            $token = $user->createToken('myToken')->accessToken;
            return response()->json([
                'status' => true,
                'message' => 'Acceso correcto',
                'token' => $token,
            ]);
        }
        else {
            return response()->json([
                'status' => false,
                'message' => 'Acceso denegado',
            ]);
        }
    }
    // Perfil API (get)
    public function perfil(){
        $user = Auth::user();
        $data = [
            'cuenta' => $user,
            'perfil' => $user->Perfile,
            'rol' => $user->Perfile->Role
        ];
        return response()->json([
            'status' => true,
            'message' => 'Información del usuario',
            'data' => $data,
        ]);
    }
    public function actualiza(Request $request){
        $user = Auth::user();
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);
        
        return response()->json([
            'status' => true,
            'message' => 'Contraseña actualizada',
        ]);
    }
    // Logout API (get)
    public function salir(){
        auth()->user()->token()->revoke();
        return response()->json([
            'status' => true,
            'message' => 'La sesión del usuario fue cerrada correctamente',
        ]);
    }
}
