@extends('layouts.secondary')

@section('title', 'Vinculación')
@section('page-title', 'Vinculación Universitaria')
@section('page-subtitle', 'Conectando a la comunidad universitaria con el sector profesional y social')

@section('banner')
    <x-banner imagen="img/vinculacion_banner.png" texto="Compromiso y Conexión Profesional" />
@endsection

@section('content')

    {{--INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12">
            <h4 class="fw-bold text-uady-blue">Coordinación de Vinculación</h4>
            <p class="text-muted" style="text-align: justify;">
                La <strong>FCA UADY</strong> fortalece el vínculo entre la academia y el entorno productivo a través de servicios especializados, capacitación constante y el fomento de competencias globales. Nuestro objetivo es brindar soluciones integrales a la sociedad y oportunidades de crecimiento a nuestros alumnos y egresados.
            </p>
        </div>
    </div>

    {{-- SERVICIOS PRINCIPALES --}}
    <div class="row g-4 mb-5">
        
        <div class="col-md-4">
            <div class="custom-card h-100">
                <img src="{{ asset('img/consultoria.jpg') }}" alt="Consultoría">
                <div class="card-body-custom d-flex flex-column">
                    <h6 class="fw-bold text-uady-blue">Consultoría y Servicios</h6>
                    <p class="small text-muted mb-4" style="text-align: justify;">
                        Ofrecemos servicios de asesoría contable, fiscal y administrativa para emprendedores y empresas, integrando el talento de nuestros docentes y alumnos.
                    </p>
                    <a href="#" class="btn-ver-mas mt-auto">Ver servicios →</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="custom-card h-100">
                <img src="{{ asset('img/edu_continua.jpg') }}" alt="Educación Continua">
                <div class="card-body-custom d-flex flex-column">
                    <h6 class="fw-bold text-uady-blue">Educación Continua</h6>
                    <p class="small text-muted mb-4" style="text-align: justify;">
                        Actualización profesional a través de diplomados, talleres y cursos diseñados para las exigencias del mercado laboral actual.
                    </p>
                    <a href="#" class="btn-ver-mas mt-auto">Ver cartelera →</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="custom-card h-100">
                <img src="{{ asset('img/idiomas.jpg') }}" alt="Centro de Idiomas">
                <div class="card-body-custom d-flex flex-column">
                    <h6 class="fw-bold text-uady-blue">Centro de Idiomas</h6>
                    <p class="small text-muted mb-4" style="text-align: justify;">
                        Programas de inglés y otros idiomas orientados a la competitividad internacional de nuestros estudiantes y el público general.
                    </p>
                    <a href="#" class="btn-ver-mas mt-auto">Más información →</a>
                </div>
            </div>
        </div>

    </div>

    {{-- ÁREAS DE IMPACTO  --}}
    <div class="section-gray px-4 py-5 mb-5" style="background-color: #f1f5f9; border-radius: 15px;">
        <div class="row align-items-center text-center">
            <div class="col-md-10 mx-auto">
                <h5 class="fw-bold text-uady-blue mb-4">Fortaleciendo lazos institucionales</h5>
                
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <div class="p-3 bg-white rounded shadow-sm">
                            <i class="bi bi-briefcase-fill text-uady-gold fs-3"></i>
                            <p class="fw-bold text-uady-blue mb-0 mt-2">Bolsa de Trabajo</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-white rounded shadow-sm">
                            <i class="bi bi-people-fill text-uady-gold fs-3"></i>
                            <p class="fw-bold text-uady-blue mb-0 mt-2">Prácticas Profesionales</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-white rounded shadow-sm">
                            <i class="bi bi-handshake-fill text-uady-gold fs-3"></i>
                            <p class="fw-bold text-uady-blue mb-0 mt-2">Convenios</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <p class="text-muted">¿Interesado en una colaboración institucional o empresarial?</p>
                    <a href="" class="btn btn-primary px-5 py-2" style="background-color: #021A54; border: none; border-radius: 50px;">
                        Contactar a Vinculación
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection