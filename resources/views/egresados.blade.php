@extends('layouts.secondary')
@section('title', 'Egresados')
@section('page-title', 'Egresados')
@section('page-subtitle', 'Consulta l ainformación relevante para los egresados.')
@section('content')

{{--cards de información --}}
<div class="container-fluid px-lg-5 mb-5 mt-4 animate-entrance">
    <div class="row g-4 justify-content-center">
        
        <div class="col-md-4 col-12">
            <a href="#" class="text-decoration-none egresado-link-card h-100 d-flex align-items-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon-box-uady me-3 d-flex align-items-center justify-content-center rounded-3">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-uady-blue mb-1">Coordinación de Seguimiento</h6>
                    <p class="small text-muted mb-0">Mantente en contacto con tu facultad y conoce los programas.</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-12">
            <a href="#" class="text-decoration-none egresado-link-card h-100 d-flex align-items-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon-box-uady me-3 d-flex align-items-center justify-content-center rounded-3">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-uady-blue mb-1">Registro al EGEL</h6>
                    <p class="small text-muted mb-0">Consulta las fechas, requisitos y procesos de inscripción.</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-12">
            <a href="#" class="text-decoration-none egresado-link-card h-100 d-flex align-items-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon-box-uady me-3 d-flex align-items-center justify-content-center rounded-3">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-uady-blue mb-1">Trámites de Titulación</h6>
                    <p class="small text-muted mb-0">Guía paso a paso, documentación y opciones disponibles.</p>
                </div>
            </a>
        </div>

    </div>
</div>

{{--ENCABEZADO ORGULLO FCA--}}
<div class="egresados-hero-header position-relative overflow-hidden mb-5 rounded-4 shadow-sm animate-entrance">
        <div class="hero-bg-image" style="background-image: url('{{ asset('img/egresado.png') }}');"></div>
        <div class="hero-overlay-tint"></div>
        
        <div class="hero-content-text container text-center position-absolute top-50 start-50 translate-middle z-index-1">
            <span class="text-uady-gold text-uppercase fw-bold tracking-wider small-title-badge mb-1 d-block">
                <i class="bi bi-mortarboard me-2"></i>Memorandúm de generaciones
            </span>
            
            <h1 class="hero-main-title fw-extrabold text-white mt-1 mb-3">
                Orgullo Egresados FCA
            </span></h1>
            
            <p class="hero-sub-text text-white-85 mx-auto mb-0">
                Reconocimiento a nuestras generaciones y alumnos destacados que han dejado huella en la facultad.
            </p>
            <div class="custom-divider-line mx-auto mt-3"></div>
        </div>
</div>

{{--GENEERACIONES  --}}
<x-generaciones-list>

    <x-generaciones-row 
        image="img/gen1.png" 
        subtitle="Egresados de los programas de Licenciatura." 
        title="Generación XCVIII" 
    />

    <x-generaciones-row 
        image="img/gen2.png"  
        subtitle="Egresados de los programas de Licenciatura." 
        title="Generación XLV" 
    />

    <x-generaciones-row 
        image="img/gen3.png" 
        subtitle="Egresados de los programas de Licenciatura." 
        title="Generación XXXI" 
    />

    <x-generaciones-row 
        image="img/gen4.png" 
        subtitle="Egresados de los programas de Licenciatura." 
        title="Generación XII" 
    />

</x-generaciones-list>

{{--mejores promedios de licenciatura --}}
<div class="container-fluid px-lg-5 mb-5 pt-5 animate-entrance">
    
    {{-- ENCABEZADO--}}
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-12 text-center">
            <span class="text-uady-blue text-uppercase fw-bold tracking-wider small-title-badge mb-2 d-block" style="letter-spacing: 2px; font-size: 0.85rem;">
                <i class="bi bi-award-fill text-uady-gold me-1"></i> Excelencia Académica
            </span>
            <h2 class="display-6 fw-extrabold text-uady-gold m-0 text-uppercase prompt-title" style="font-weight: 800 !important; color: #c99700 !important; text-shadow: 0px 1px 1px rgba(0,0,0,0.05);">
                Mejores Promedios de Licenciatura
            </h2>
            <div class="custom-divider-line mx-auto my-3" style="width: 50px; height: 3px; background-color: #021A54; border-radius: 2px;"></div>
            <p class="text-muted mx-auto mb-0 small" style="max-width: 550px; font-size: 0.95rem;">
                Reconocimiento institucional a los egresados con los puntajes más altos por programa académico.
            </p>
        </div>
    </div>

        <div class="row g-4 justify-content-center">
            @foreach($destacadosLic as $alumno)
                <x-alumno-card 
                    image="{{ $alumno->imagen }}" 
                    name="{{ $alumno->nombre }}" 
                    badge="{{ $alumno->badge_texto }}" 
                >
                    Egresado de la Licenciatura en <strong>{{ $alumno->programa }}</strong>, con un destacable promedio de <strong>{{ $alumno->promedio }}</strong>.
                </x-alumno-card>
            @endforeach
        </div>


{{--mejores promedios de maestría--}}
<div class="container-fluid px-lg-5 mb-5 pt-5">
    
    {{--ENCABEZADO --}}
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-12 text-center">
            <span class="text-uady-blue text-uppercase fw-bold tracking-wider small-title-badge mb-2 d-block" style="letter-spacing: 2px; font-size: 0.85rem;">
                <i class="bi bi-mortarboard-fill text-uady-gold me-1"></i> Altos Estudios
            </span>
            <h2 class="display-6 fw-extrabold text-uady-gold m-0 text-uppercase prompt-title" style="font-weight: 800 !important; color: #c99700 !important; text-shadow: 0px 1px 1px rgba(0,0,0,0.05);">
                Mejores Promedios de Maestría
            </h2>
            <div class="custom-divider-line mx-auto my-3" style="width: 50px; height: 3px; background-color: #021A54; border-radius: 2px;"></div>
            <p class="text-muted mx-auto mb-0 small" style="max-width: 550px; font-size: 0.95rem;">
                Reconocimiento a egresados con los mejores promedios por maestría.
            </p>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
    @foreach($destacadosMae as $alumno)
        <x-alumno-card 
            image="{{ $alumno->imagen }}" 
            name="{{ $alumno->prefijo_profesional ? $alumno->prefijo_profesional . ' ' : '' }}{{ $alumno->nombre }}" 
            badge="{{ $alumno->badge_texto }}"
        >
            Egresado de la <strong>{{ $alumno->programa }}</strong>, con un destacable promedio de <strong>{{ $alumno->promedio }}</strong>.
        </x-alumno-card>
    @endforeach
</div>
</div>

@endsection
