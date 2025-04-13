<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
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

Route::get('/', [App\Http\Controllers\PaginasController::class, 'inicio'])->name('inicio');
Route::get('/proximos-eventos', [App\Http\Controllers\PaginasController::class, 'proximosEventos']);
Route::get('/pago', [App\Http\Controllers\PaginasController::class, 'pago']);
Route::get('/nuevas-reservas', [App\Http\Controllers\PaginasController::class, 'nuevasReservas']);
Route::get('/modificar-salas', [App\Http\Controllers\PaginasController::class, 'modificarSalas']);
Route::get('/inicio-sesion', [App\Http\Controllers\PaginasController::class, 'inicioSesion']);
Route::get('/gestion-salas', [App\Http\Controllers\PaginasController::class, 'gestionSalas']);
Route::get('/gestion-reservas', [App\Http\Controllers\PaginasController::class, 'gestionReservas']);
Route::get('/form-registro', [App\Http\Controllers\PaginasController::class, 'formRegistro'])->name('form-registro');
Route::get('/faq', [App\Http\Controllers\PaginasController::class, 'faq']);
Route::get('/busquedas-salas', [App\Http\Controllers\PaginasController::class, 'busquedasSalas']);
Route::post('/iniciar-sesion', [AuthController::class, 'login'])->name('login');
Route::post('form-registro',action:[AuthController::class, 'registro'])->name('registro');
Route::get('/logout', function () {
    session()->flush(); // Borra toda la sesión
    return redirect('/');
})->name('logout');
