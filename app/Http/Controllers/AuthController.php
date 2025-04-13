<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $respuesta)
    {
        $usuario = DB::table('usuarios')
            ->where('email', $respuesta->email)
            ->first();
        if ($usuario && password_verify($respuesta->password, $usuario->password)) {
            session(['idusuarios' => $usuario->idusuarios, 'usuario' => $usuario->usuario]);

            return redirect('/');
        } else {
            return redirect('/inicio-sesion')->with('error', 'Credenciales incorrectas');
        }
    }
    public function registro(Request $respuesta)
{
    try {
        // Validación de los campos
        $validar = $respuesta->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:usuarios,email',
            'usuario' => 'required|string|max:255|unique:usuarios,usuario',
            'password' => 'required|string|min:8',
        ]);
        Log::info('Datos enviados al registrar: ', $validar);
        // Crear nuevo usuario
        DB::table('usuarios')->insert([
            'nombre' => $validar['nombre'],
            'apellidos' => $validar['apellidos'],
            'telefono' => $validar['telefono'],
            'email' => $validar['email'],
            'usuario' => $validar['usuario'],
            'password' => bcrypt($validar['password']),
        ]);


        // Redirigir con mensaje de éxito
        return redirect()->route('inicio')->with('success', 'Usuario registrado con éxito');
    } catch (\Exception $e) {
        // Captura cualquier error y muestra el mensaje
        Log::error('Error al registrar: ' . $e->getMessage());
        return redirect()->route('form-registro')->with('error', 'Hubo un problema al registrar el usuario: ' . $e->getMessage());
    }
}
}
