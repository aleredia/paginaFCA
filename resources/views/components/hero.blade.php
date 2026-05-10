<div class="hero position-relative d-flex align-items-center">
    {{-- IMAGEN --}}
    <img 
        src="{{ asset($imagen ?? 'img/fondoo.jpg') }}"
        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
        alt="Hero Image"
    >
    {{--COLOR DE ENCIMA DE LA IMAGEN --}}
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    {{-- CONTENIDO --}}
    <div class="container position-relative z-1 text-white">
        <div class="col-lg-7">
            <h1 class="hero-title fw-bold mb-4">
                {{ $slot }}
            </h1>
        </div>
    </div>
</div>