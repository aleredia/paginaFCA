@extends('layouts.secondary')

@section('title', 'Aspirantes')
@section('page-title', 'Aspirantes')
@section('page-subtitle', 'Información y pasos para tu proceso de ingreso')

@section('banner')
    <x-banner imagen="img/aspirante.png" texto="Tu futuro comienza aquí" />
@endsection

@section('content')

    {{-- BLOQUE 1: INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12">
            <h4 class="fw-bold text-uady-blue">Procesos de Admisión</h4>
            <p class="text-muted" style="text-align: justify;">
                Los procesos de admisión de nuevo ingreso tanto de licenciatura como de posgrado en la <strong>FCA UADY</strong> son equitativos, transparentes y diversos. Todo el proceso se rige bajo las convocatorias oficiales emitidas a principios de cada año por el Consejo Universitario.
            </p>
        </div>
    </div>

    {{-- BLOQUE 2: SERVICIOS (LAS CARDS) --}}
    <div class="row g-4 mb-5">
        
        <!-- Licenciatura -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/licenciatura.png') }}" alt="Licenciatura">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Inscripción a Licenciatura</h6>
                        <p class="small text-muted" style="text-align: justify;">
                            Sigue los pasos del Sistema de Información del Proceso de Ingreso. Todo inicia con la aprobación de la convocatoria anual.
                        </p>
                        <div class="bg-light p-2 rounded mb-3">
                            <p class="text-muted small mb-0">
                                <i class="bi bi-envelope-fill me-2"></i>staff.seleccion@correo.uady.mx<br>
                                <i class="bi bi-telephone-fill me-2"></i>(999) 930 01 30 Ext. 74148
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('aspirante') }}" class="btn-ver-mas mt-auto">Ver convocatoria →</a>
                </div>
            </div>
        </div>

        <!-- Posgrado -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/maestria.png') }}" alt="Posgrado">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Inscripción al Posgrado</h6>
                        <p class="small text-muted" style="text-align: justify;">
                            Proceso diseñado para seleccionar aspirantes a nuestros programas de maestría y especialidad. Registro vía Portal de Selección.
                        </p>
                        <div class="bg-light p-2 rounded mb-3">
                            <p class="text-muted small mb-0">
                                <i class="bi bi-envelope-fill me-2"></i>staff.seleccion@correo.uady.mx<br>
                                <i class="bi bi-telephone-fill me-2"></i>(999) 930 01 30 Ext. 74148
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('aspirante') }}" class="btn-ver-mas mt-auto">Ver programas →</a>
                </div>
            </div>
        </div>

    </div>

    {{-- BLOQUE QUE ES EQUIVALENTE A LA TABLA DE MAESTROS --}}
    <div class="section-gray px-4 py-5 mb-5">
        <div class="row text-center">
            <div class="col-12">
                <h5 class="fw-bold text-uady-blue mb-3">¿Tienes dudas sobre que estudiar?</h5>
                <p class="text-muted">Consulta nuestra oferta académica.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary px-4 py-2" style="border-radius: 50px; background-color: #021A54; border: none;">
                        Oferta
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection