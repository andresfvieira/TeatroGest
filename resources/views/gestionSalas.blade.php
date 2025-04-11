@extends("layouts.plantilla");
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body>
    <h1>Gestión de Salas</h1>
    <div class="contenedor-nav">
        <a href="inicio">ir a inicio</a>
        <a href="reservas-usuarios">Ir a Reservas de Usuarios</a>
    </div>
</body>

</html>
