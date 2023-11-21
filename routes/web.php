<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

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
Route::get('configuraciones/instituto',[LayoutController::class,'instituto'])->name('instituto')->middleware('auth');