@extends('layouts.secondary')

@section('title', 'Aspirantes')
@section('page-title', 'Aspirantes FCA')
@section('page-subtitle', 'Tu camino para formar parte de la Facultad de Contaduría y Administración')

@section('banner')
    <x-banner imagen="img/aspirante.png" texto="Tu futuro comienza aquí" />
@endsection

@section('content')


{{-- POR QUE FCA --}}
<div class="row mb-5 align-items-center g-5">

    <div class="col-lg-6">
        <img src="{{ asset('img/equipo.jpg') }}"
            class="img-fluid rounded-4 shadow">
    </div>

    <div class="col-lg-6">
        <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3">
            ¿Por qué estudiar en FCA?
        </span>
        <h2 class="fw-bold text-uady-blue mb-4">
            Formación de excelencia académica y humana
        </h2>
        <p class="text-muted" style="text-align: justify;">
            La FCA UADY cuenta con programas reconocidos dentro del
            <strong>Padrón de Alto Rendimiento Académico del CENEVAL</strong>,
            además de acreditaciones nacionales y una planta docente integrada
            por profesionales altamente capacitados.
        </p>
        <div class="row g-3 mt-3">
            <div class="col-6">
                <div class="bg-uady-gold-soft border-uady-gold-thin rounded-4 p-4 h-100 text-center">
                    <h2 class="fw-bold text-uady-blue">164</h2>
                    <p class="small text-muted mb-0">
                        Profesores altamente calificados
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-uady-gold-soft border-uady-gold-thin rounded-4 p-4 h-100 text-center">
                    <h2 class="fw-bold text-uady-blue">20</h2>
                    <p class="small text-muted mb-0">
                        Asignaturas impartidas en inglés
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-uady-gold-soft border-uady-gold-thin rounded-4 p-4 h-100 text-center">
                    <h2 class="fw-bold text-uady-blue">116</h2>
                    <p class="small text-muted mb-0">
                        Premios EGEL en 2024
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-uady-gold-soft border-uady-gold-thin rounded-4 p-4 h-100 text-center">
                    <h2 class="fw-bold text-uady-blue">Nivel 1</h2>
                    <p class="small text-muted mb-0">
                        Reconocimiento nacional CENEVAL
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- VENTAJAS DE FCA --}}
<div class="px-4 py-5 mb-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-uady-blue">
            Lo que encontrarás en FCA
        </h2>
        <p class="text-muted">
            Formación integral, movilidad académica y programas actualizados.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/reconocimiento.jpg') }}">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Reconocimiento Académico
                    </h5>
                    <p class="service-description-new">
                        Nuestros programas cuentan con acreditaciones nacionales
                        y altos resultados en evaluaciones CENEVAL y CACECA.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/movi.jpg') }}">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Experiencia Internacional
                    </h5>
                    <p class="service-description-new">
                        Participa en movilidad estudiantil, asignaturas en inglés
                        y experiencias académicas nacionales e internacionales.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/valores.jpg') }}">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Formación con Valores
                    </h5>
                    <p class="service-description-new">
                        Formamos profesionales con responsabilidad, ética,
                        honestidad, empatía y compromiso social.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- PROCESOS --}}
<div class="row g-5 mb-5">

    {{-- LICENCIATURA --}}
    <div class="col-lg-6" id="licenciatura">
        <div class="service-card-new">
            <div class="service-image-new">
                <img src="{{ asset('img/licenciatura.png') }}">
                <div class="service-overlay-new"></div>
            </div>
            <div class="service-body-new">
                <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3">
                    Licenciatura
                </span>
                <h3 class="service-title-new">
                    Proceso de Ingreso a Licenciatura
                </h3>
                <p class="service-description-new">
                    El proceso de ingreso es transparente, equitativo y se realiza
                    mediante el Sistema de Información del Proceso de Ingreso (SIPI).
                    Todo inicia con la publicación de la convocatoria oficial emitida
                    por el Consejo Universitario.
                </p>
                <div class="mt-4">
                    <a href="https://ingreso.uady.mx/licenciatura/"
                        target="_blank"
                        class="btn-estudiantes">
                        Ir al portal
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- POSGRADO --}}
    <div class="col-lg-6" id="posgrado">
        <div class="service-card-new">
            <div class="service-image-new">
                <img src="{{ asset('img/maestria.png') }}">
                <div class="service-overlay-new"></div>
            </div>
            <div class="service-body-new">
                <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3">
                    Posgrado
                </span>
                <h3 class="service-title-new">
                    Proceso de Ingreso al Posgrado
                </h3>
                <p class="service-description-new">
                    El proceso está dirigido a aspirantes interesados en cursar
                    maestrías y especialidades de la UADY mediante el Sistema
                    de Información para el Proceso de Selección (SIPS).
                </p>
                <div class="mt-4">
                    <a href="https://ingreso.uady.mx/posgrado/"
                        target="_blank"
                        class="btn-estudiantes">
                        Ir al portal
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" mb-4">
    <h2 class="fw-bold mb-4">
        Formamos profesionales con valores
    </h2>
    <a href="{{ route('oferta') }}" class="btn-estudiantes">
        Conocer oferta académica
    </a>
</div>

@endsection