<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<?php $__env->startSection('title', 'Inicio'); ?>
<!-- http://localhost/teatrogest/public -->

<?php $__env->startSection('main'); ?>
    <main class="flex flex-col w-full justify-center mt-10% sm:mt-[50px] gap-4 md:lg-9 lg:gap-12 ">
        <!--Título H1 - TEATROGEST-->
        <div class="flex justify-start mx-10 sm:mx-24">
            <h1 class="text-[#990000]">TeatroGest</h1>
        </div>

        <!--Sección principal de presentación de la aplicación-->
        <section class="flex mx-10 sm:mx-24">

            <div>
                <!--Imagen de sillones de teatro (se puede modificar por la que desee el cliente) pendiente de alinear con texto-->
                <img src="img/sillones.jpg" alt="sillones teatro" class="home-img-bienvenida">
                <!--Texto introductorio-->
                <p class="home-texto-bienvenida leading-relaxed">Bienvenidos a <b>TeatroGest</b> 🎭
                    Aplicación para la gestión de reservas de espacios espacio teatrales, dedicado a la magia del
                    espectáculo, donde el arte y la cultura cobran vida. Con una arquitectura impresionante y tecnología de
                    vanguardia, nuestro teatro ofrece una experiencia única para cada espectador.
                    Desde obras de teatro clásicas y modernas hasta conciertos, danza y eventos especiales, celebramos el
                    talento y la creatividad en todas sus formas. Contamos con cómodas instalaciones, una acústica
                    excepcional y un ambiente acogedor que garantiza una experiencia inolvidable.
                    ¡Encuentra tu espacio para poder vivir el espectáculo con nosotros! 🎶✨
                </p>
            </div>

        </section>
        <!--Reseñas BUSCAR API-->
        <div class="flex items-start mx-10 sm:mx-24">
            <h1 class="text-[#990000]">Reseñas</h1>
        </div>
        <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <section class="sm:mx-24 flex">
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-950d3ce1-1b66-4612-9a4c-0ff6b225647f" data-elfsight-app-lazy></div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Victor\Documents\GitHub\TeatroGest\resources\views/inicio.blade.php ENDPATH**/ ?>