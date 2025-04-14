@php
$homeSvg = file_get_contents(resource_path('svg/home.svg'));
@endphp
<nav class="sticky z-50 top-0 bg-white w-full shadow-md h-[85px]">
    <!-- Sí el id de la session es null, es que no se inicio sesión correctamente y muestra esta vista -->
    @if(!session('idusuarios'))
    <!--Imagen decorativa del nav-->
    <div class="absolute inset-0 flex justify-center h-[100px]">
        <img src="img/deco-nav.png" alt="Imagen decorativa del nav" class="h-[35px] w-auto">
    </div>
    <div class="relative flex items-center justify-between px-4 mt-6">
        <!--Logo a la izquierda del nav con un tamaño de 50px-->
        <div class="flex"><img src="img/Logo.png" alt="Logo" class="self-start h-[50px]"></div>
        <!--Enlaces y botones a la derecha-->
        <div class="flex items-center self-end gap-8 ">
            <a href="{{ url('/') }}" class="animation-scale">{!! $homeSvg !!}</a>
            <!--Enlace a FAQ-->
            <a href="{{  url('proximos-eventos') }}" class="hover:text-[#990000]">Próximos eventos</a>
            <a href="{{ url('faq') }}" class="hover:text-[#990000]">FAQ</a>
            <!--Botón a Registro-->
            <a href="{{ url('form-registro') }}"
                class="bg-black hover:bg-[#5d5d5d] text-white px-2 py-1 rounded-lg cursor-pointer">Registro</a>
            <!--Botón a Iniciar sesión-->
            <a href="{{ url('inicio-sesion') }}"
                class="bg-[#990000] hover:bg-[#a84848] text-white px-2 py-1 rounded-lg cursor-pointer md:text-base">Iniciar
                sesión</a>
        </div>
    </div>
    @elseif(session('id_rol') === 2)
    <div class="absolute inset-0 flex justify-center h-[100px] contenedor-decoration-navbar">
        <img src="img/deco-nav.png" alt="Imagen decorativa del nav" class="h-[35px] w-auto">
    </div>
    <div class="relative flex items-center justify-between px-4 mt-6">
        <!--Logo a la izquierda del nav con un tamaño de 50px-->
        <div class="flex"><img src="img/Logo.png" alt="Logo" class="self-start h-[50px]"></div>

        <!--Enlaces y botones a la derecha-->
        <div class="flex items-center self-end gap-2 md:gap-5">
            <span class="navbar-text flex ms-2 justify-end">
                <span>Bienvenido</span>
                <span class="text-[#990000] ms-2">{{ session('usuario') }}</span>
            </span>
            <a href="{{ url('/') }}" class="animation-scale">{!! $homeSvg !!}</a>
            <!-- Enlace a gestion reservas -->
            <a href="{{  url('gestion-reservas') }}" class="hover:text-[#990000]">Gestión reservas</a>
            <!--Enlace a FAQ-->
            <a href="{{  url('proximos-eventos') }}" class="hover:text-[#990000]">Próximos eventos</a>
            <a href="{{ url('faq') }}" class="hover:text-[#990000]">FAQ</a>
            <!--Botón a Iniciar sesión-->
            <a href="{{ route('salir') }}" class="bg-[#990000] hover:bg-[#a84848] text-white px-2 py-1 rounded-lg cursor-pointer md:text-base">
                Cerrar sesión
            </a>
        </div>
    </div>
    @else
    <div class="absolute inset-0 flex justify-center h-[100px] contenedor-decoration-navbar">
        <img src="img/deco-nav.png" alt="Imagen decorativa del nav" class="h-[35px] w-auto">
    </div>
    <div class="relative flex items-center justify-between px-4 mt-6">
        <!--Logo a la izquierda del nav con un tamaño de 50px-->
        <div class="flex"><img src="img/Logo.png" alt="Logo" class="self-start h-[50px]"></div>
        <!--Enlaces y botones a la derecha-->
        <div class="flex items-center self-end gap-2 md:gap-5">
            <span class="navbar-text flex ms-2 justify-end">
                <span>Bienvenido</span>
                <span class="text-[#990000] ms-2">{{ session('usuario') }}</span>
            </span>
            <a href="{{ url('/') }}" class="animation-scale">{!! $homeSvg !!}</a>
            <!-- Enlace a modificar salas -->
            <a href="{{  url('modificar-salas') }}" class="hover:text-[#990000]">Modificar Salas</a>
            <!-- Enlace a gestion reservas -->
            <a href="{{  url('gestion-reservas') }}" class="hover:text-[#990000]">Gestión reservas</a>
            <!-- Enlace a proximos eventos -->
            <a href="{{  url('proximos-eventos') }}" class="hover:text-[#990000]">Próximos eventos</a>
            <!--Enlace a FAQ-->
            <a href="{{ url('faq') }}" class="hover:text-[#990000]">FAQ</a>
            <!--Botón a Iniciar sesión-->
            <a href="{{ route('salir') }}" class="bg-[#990000] hover:bg-[#a84848] text-white px-2 py-1 rounded-lg cursor-pointer md:text-base">
                Cerrar sesión
            </a>
        </div>
    </div>
    @endif
</nav>
