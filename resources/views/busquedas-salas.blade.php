@extends("layouts.plantilla")

@vite('resources/css/app.css')
@section('title', 'Proximos eventos')
<!-- http://localhost/prueba-laravel/public -->

@section("main")
<main class="m-4">
    <h2 class="text-[#990000] self-start text-5xl">Búsqueda de sala</h2>
    <hr class="text-[#990000]">

    <section class="flex flex-col items-center justify-center gap-9">
        <!--Listado este listado hay que conectarlo con la BBDD para conectarlo-->
        <div>
            <select class="w-80 border-1 rounded-lg mt-9">
                <option value="1">Sala 1</option>
                <option value="2">Sala 2</option>
                <option value="3">Sala 3</option>
            </select>
        </div>
        <!--Mapa interactivo-->
        <div class="w-[800px] h-[500px] shadow">
            <div id="contenedor-del-mapa" class="absolutew-[800px] h-[500px]"></div>
        </div>
        <div>
            <a href="Pago.html"
                class="bg-[#990000] hover:bg-[#a84848] text-white p-2 rounded-lg w-auto mx-auto my-8 cursor-pointer">Reservar</a>
        </div>
    </section>

</main>

@endsection
