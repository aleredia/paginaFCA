@extends('layouts.secondary')

@section('title', 'Estudiantes')
@section('page-title', 'Estudiantes')
@section('page-subtitle', 'Información que puede ser útil')

@section('banner')
    <x-banner imagen="img/estudiante.jpg" texto="Tu futuro comienza aquí" />
@endsection

@section('content')

    {{-- INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12">
            <h4 class="fw-bold text-uady-blue">
                Servicios que ofrece la facultad a los estudiantes
            </h4>

            <p class="text-muted" style="text-align: justify;">
                Los procesos de admisión de nuevo ingreso tanto de licenciatura como de posgrado en la <strong>FCA UADY</strong> son equitativos, transparentes y diversos. Todo el proceso se rige bajo las convocatorias oficiales emitidas a principios de cada año por el Consejo Universitario.
            </p>
        </div>
    </div>

    {{-- SERVICIOS --}}
    <div class="row g-4 mb-5">
        @foreach($servicios as $servicio)
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/' . $servicio->img_serv) }}" alt="{{ $servicio->nombre }}">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        {{ $servicio->nombre }}
                    </h5>
                    <p class="service-description-new">
                        {{ $servicio->descripcion }}
                    </p>
                    {{-- CONTACTO --}}
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/' . $servicio->img_cont) }}" alt="{{ $servicio->contacto }}">
                            </div>
                            <div class="contact-info-new">
                                <h6>{{ $servicio->contacto }}</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    {{ $servicio->correo }}
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    {{ $servicio->puesto }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- CTA --}}
    <div class="cta-estudiantes">
        <h3 class="fw-bold mb-3">
            ¿Tienes dudas sobre qué estudiar?
        </h3>
        <p class="mb-4">
            Consulta nuestra oferta académica.
        </p>
        <a href="oferta" class="btn-estudiantes">
            Oferta
        </a>
    </div>

@endsection