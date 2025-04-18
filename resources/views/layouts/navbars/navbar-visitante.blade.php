    <!--Imagen decorativa del nav-->
    <div class="absolute inset-0 flex justify-center h-[100px]">
        <img src="img/deco-nav.png" alt="Imagen decorativa del nav" class="h-[35px] hidden sm:w-auto sm:block">
    </div>
    <div class="relative gap-2 flex items-center justify-center sm:justify-between px-1 sm:px-4 h-full sm:mt-4">
        <!--Logo a la izquierda del nav con un tamaño de 50px-->
        <img src="img/Logo.png" alt="Logo" class="hidden sm:flex h-[50px]">
        <div class="ml-2 md:mr-0 md:ml-0 md:absolute md:left-1/2 md:transform md:-translate-x-1/2">
            <a href="{{ url('/') }}" class="animation-scale">{!! $homeSvg !!}</a>
        </div>
        <!--Enlaces y botones a la derecha-->
        <div class="flex gap-2 sm:gap-4 items-center justify-center sm:justify-end w-[1500px]">
            <div class="flex gap-1 border-2 border-[#990000] items-center h-10 text-[10px] md:text-base sm:h-auto w-auto sm:w-[220px] rounded-xl">
                <!--Enlace a FAQ-->
                <a href="{{  url('proximos-eventos') }}" class="hover:bg-[#990000] border border-white hover:text-white rounded-xl p-2 transition-all duration-300 ease-out">Próximos eventos</a>
                <a href="{{ url('faq') }}" class="hover:bg-[#990000] border border-white hover:text-white rounded-xl p-2 transition-all duration-300 ease-out">FAQ</a>
            </div>

            <div class="flex gap-2 sm:gap-3 text-[10px] md:text-base">
                <!--Botón a Registro-->
                <a href="{{ url('form-registro') }}"
                    class="bg-black hover:bg-[#5d5d5d] text-white px-2 flex items-center h-10 sm:py-2  rounded-lg cursor-pointer">Registro</a>
                <!--Botón a Iniciar sesión-->
                <a href="{{ url('inicio-sesion') }}"
                    class="bg-[#990000] hover:bg-[#a84848] text-white px-2 flex py-2 items-center rounded-lg w-auto cursor-pointer">Iniciar
                    sesión</a>
            </div>
        </div>
    </div>
