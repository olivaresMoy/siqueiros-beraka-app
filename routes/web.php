<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\InstitucioneController;
use App\Http\Controllers\NiveleController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[LayoutController::class,'login'])->name('login');
Route::get('/inicio',[LayoutController::class,'inicio'])->name('inicio')->middleware('auth');
/* Rutas para Instituciones */
Route::get('configuraciones/instituto',[InstitucioneController::class,'index'])->name('instituto')->middleware('auth');
Route::post('instituto-save',[InstitucioneController::class,'store'])->name('instituto-save')->middleware('auth');
Route::patch('instituto-update',[InstitucioneController::class,'update'])->name('instituto-update')->middleware('auth');
Route::get('instituto-delete/{id}',[InstitucioneController::class,'destroy'])->name('instituto-delete')->middleware('auth');
/* Rutas para Niveles */
Route::get('configuraciones/niveles',[NiveleController::class,'index'])->name('niveles')->middleware('auth');
Route::post('nivel-save',[NiveleController::class,'store'])->name('nivel-save')->middleware('auth');
Route::patch('nivel-update',[NiveleController::class,'update'])->name('nivel-update')->middleware('auth');
Route::get('nivel-delete/{id}',[NiveleController::class,'destroy'])->name('nivel-delete')->middleware('auth');
/* Rutas para Grupos */
Route::get('configuraciones/grupos',[GrupoController::class,'index'])->name('grupos')->middleware('auth');
Route::post('grupo-save',[GrupoController::class,'store'])->name('grupo-save')->middleware('auth');
Route::patch('grupo-update',[GrupoController::class,'update'])->name('grupo-update')->middleware('auth');
Route::get('grupo-delete/{id}',[GrupoController::class,'destroy'])->name('grupo-delete')->middleware('auth');
/* Rutas para Asignaturas */
Route::get('configuraciones/asignaturas',[AsignaturaController::class,'index'])->name('asignaturas')->middleware('auth');
Route::post('asignatura-save',[AsignaturaController::class,'store'])->name('asignatura-save')->middleware('auth');
Route::patch('asignatura-update',[AsignaturaController::class,'update'])->name('asignatura-update')->middleware('auth');
Route::get('asignatura-delete/{id}',[AsignaturaController::class,'destroy'])->name('asignatura-delete')->middleware('auth');
/* Rutas para las cuentas de usuarios */
Route::get('usuarios/cuentas',[UserController::class,'index'])->name('cuentas')->middleware('auth');
Route::post('usuario-save',[UserController::class,'store'])->name('usuario-save')->middleware('auth');
Route::patch('usuario-update',[UserController::class,'update'])->name('usuario-update')->middleware('auth');
Route::get('usuario-delete/{id}',[UserController::class,'destroy'])->name('usuario-delete')->middleware('auth');
/* Rutas para listar la Data App */
Route::get('resources/notificaciones',[DataAppController::class,'indexNotificaciones'])->name('notificaciones')->middleware('auth');
Route::get('resources/tareas',[DataAppController::class,'indexTareas'])->name('tareas')->middleware('auth');
Route::get('resources/asistencias',[DataAppController::class,'indexAsistencias'])->name('asistencias')->middleware('auth');
Route::get('resources/reportes',[DataAppController::class,'indexReportes'])->name('reportes')->middleware('auth');
Route::get('resources/calificaciones',[DataAppController::class,'indexCalificaciones'])->name('calificaciones')->middleware('auth');