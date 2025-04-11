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
Route::get('/proximos-eventos', [App\Http\Controllers\PaginasController::class, 'proximosEventos']);
Route::get('/pago', [App\Http\Controllers\PaginasController::class, 'pago']);
Route::get('/nuevas-reservas', [App\Http\Controllers\PaginasController::class, 'nuevasReservas']);
Route::get('/modificar-salas', [App\Http\Controllers\PaginasController::class, 'modificarSalas']);
Route::get('/inicio-sesion', [App\Http\Controllers\PaginasController::class, 'inicioSesion']);
Route::get('/gestion-salas', [App\Http\Controllers\PaginasController::class, 'gestionSalas']);
Route::get('/gestion-reservas', [App\Http\Controllers\PaginasController::class, 'gestionReservas']);
Route::get('/form-registro', [App\Http\Controllers\PaginasController::class, 'formRegistro']);
Route::get('/faq', [App\Http\Controllers\PaginasController::class, 'faq']);
Route::get('/busquedas-salas', [App\Http\Controllers\PaginasController::class, 'busquedasSalas']);

// Route::resource(name: 'posts', controller: Ejemplo3Controller::class);
// Route::resource(name: 'posts', controller: Ejemplo2Controller::class);
