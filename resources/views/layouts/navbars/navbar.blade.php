@php
$homeSvg = file_get_contents(resource_path('svg/home.svg'));
@endphp
<nav class="sticky z-50 top-0 bg-white w-full shadow-md h-[100px]">
    <!-- Sí el id de la session es null, es que no se inicio sesión correctamente y muestra esta vista -->
    @if(!session('idusuarios'))
    @include('layouts.navbars.navbar-visitante');
    @elseif(session('id_rol') === 2)
    @include('layouts.navbars.navbar-profesor');
    @else
    @include('layouts.navbars.navbar-admin');
    @endif
</nav>
