<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\SaveUserRequest;
use App\Models\User;
use App\Models\Perfile;
use App\Models\Docente;
use App\Models\Tutore;
use App\Models\Alumno;
use App\Models\Role;
use App\Models\Grupo;
use App\Mail\CuentaMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado
        $users = User::all();
        $alumnos = Alumno::all();
        $docentes = Docente::all();
        $tutores = Tutore::all();
        $roles = Role::all();
        $grupos = Grupo::all();

        return view('usuarios/cuentas',[
            'usuarios' => $users,
            'alumnos' => $alumnos,
            'docentes' => $docentes,
            'tutores' => $tutores,
            'roles' => $roles,
            'grupos' => $grupos,
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
    public function store(SaveUserRequest $request)
    {
        //
        $varsUser = array(
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        );
        $idUser = User::create($varsUser)->id;
        $rol = Role::findOrFail($request->input("role_id"));
        $varsPerfile = array(
            'nombre' => $request->input("nombre"),
            'apaterno' => $request->input("apaterno"),
            'amaterno' => $request->input("amaterno"),
            'celular' => $request->input("celular"),
            'sexo' => $request->input("sexo"),
            'role_id' => $request->input("role_id"),
            'user_id' => $idUser,
        );
        Perfile::create($varsPerfile);

        if($rol->name == 'Alumno'){
            $varsAlumno = array(
                'user_id' => $idUser,
                'grupo_id' => $request->input("grupo_id"),
                'tutore_id' => $request->input("tutore_id"),
            );
            Alumno::create($varsAlumno);
        }

        if($rol->name == 'Tutor'){
            $varsTutor = array(
                'user_id' => $idUser,
            );
            Tutore::create($varsTutor);
        }

        if($rol->name == 'Docente'){
            $varsDocente = array(
                'user_id' => $idUser,
                'grupo_id' => $request->input("grupo_id"),
            );
            Docente::create($varsDocente);
        }
        $pass = User::findOrFail($idUser)->select('password');
        
        Mail::to(config('mail.from.address'))->queue(new CuentaMail($varsUser));
        return redirect()->route('cuentas');
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
    public function update(SaveUserRequest $request)
    {
        //
        $user = User::findOrFail($request->input('idUserUpt'));
        $perfile = Perfile::findOrFail($user->Perfile->id);

        $varsUser = array(
            'email' => $request->input("email"),
        );
        $varsPerfile = array(
            'nombre' => $request->input("nombre"),
            'apaterno' => $request->input("apaterno"),
            'amaterno' => $request->input("amaterno"),
            'celular' => $request->input("celular"),
            'sexo' => $request->input("sexo"),
        );
        $user->update($varsUser);
        $perfile->update($varsPerfile);
        
        return redirect()->route('cuentas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('cuentas');
    }
}
