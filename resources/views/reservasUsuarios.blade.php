<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>
</head>

<body class="antialiased">
    <h1>Reservas Usuarios</h1>
    <div class="contenedor-nav">
        <a href="inicio">Ir a inicio</a>
        <a href="gestion-salas">Ir a gestión salas</a>
    </div>
</body>

</html>
