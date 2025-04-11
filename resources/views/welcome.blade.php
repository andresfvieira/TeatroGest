@extends("layouts.plantilla")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>
</head>

<body class="antialiased">
    @section("header")
    <h1>Inicio página</h1>
    <div class="contenedor-nav">
        <a href="gestion-salas">Ir a gestión</a>
        <a href="reservas-usuarios">Ir a Reservas de Usuarios</a>
    </div>
    @endsection
    @section("main")
    <h2>Contenido del main:</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio explicabo sit nobis sunt error alias autem repellat temporibus tempore delectus porro dicta, assumenda quaerat vel, quibusdam ipsa vero facere totam?</p>
    @endsection
    @section("footer")
    <h3>Contactos:</h3>
    <ul>
        <li>Instagram</li>
        <li>Facebook</li>
        <li>Youtube</li>
    </ul>
    @endsection
</body>

</html>
