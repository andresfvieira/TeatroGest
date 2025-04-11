@extends("layouts.plantilla")

@vite('resources/css/app.css')
@section('title', 'Inicio')
<!-- http://localhost/prueba-laravel/public -->

@section("main")
<main class="flex content-center md:block">
    <!--Documentación del calendario: https://fullcalendar.io/docs -->
    <div id="calendario" class="flex align-center"></div>
</main>
@endsection
