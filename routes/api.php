<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificacioneController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\Api\ApiUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
// Rutas de libre acceso
Route::post('entrar',[ApiUserController::class,'entrar']);
// Pruebas
Route::apiResource('notificaciones',NotificacioneController::class);
Route::apiResource('tareas',TareaController::class);
Route::apiResource('asistencias',AsistenciaController::class);
Route::apiResource('reportes',ReporteController::class);
Route::apiResource('calificaciones',CalificacioneController::class);
// Rutas protejidas
Route::group([
    "middleware" => ["auth:api"]
], function(){
    // Rutas data resources
    Route::get('perfil',[ApiUserController::class,'perfil']);
    Route::post('actualiza',[ApiUserController::class,'actualiza']);
    Route::get('salir',[ApiUserController::class,'salir']);
});