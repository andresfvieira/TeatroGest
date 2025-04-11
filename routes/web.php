<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ejemplo3Controller;
use App\Http\Controllers\Ejemplo2Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PaginasController::class, 'inicio']);
Route::get('/inicio', [App\Http\Controllers\PaginasController::class, 'inicio']);
Route::get('/gestion-salas', [App\Http\Controllers\PaginasController::class, 'gestionSalas']);
Route::get('/reservas-usuarios', [App\Http\Controllers\PaginasController::class, 'reservasUsuarios']);

// Route::resource(name: 'posts', controller: Ejemplo3Controller::class);
// Route::resource(name: 'posts', controller: Ejemplo2Controller::class);

