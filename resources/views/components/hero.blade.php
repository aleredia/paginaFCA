<div class="hero-modern overflow-hidden">
    <img 
        src="{{ asset($imagen ?? 'img/fondoo.jpg') }}"
        class="hero-bg"
        alt="Hero Image"
    >
    
    <div class="hero-overlay"></div>

    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="hero-heading">
                    {{ $slot }}
                </h1>
                <p class="hero-description">
                    Formación académica, innovación y excelencia universitaria para construir líderes preparados para el futuro.
                </p>
            </div>
        </div>

    </div>

    <div class="hero-bottom-fade"></div>

</div>