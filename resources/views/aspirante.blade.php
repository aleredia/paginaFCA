@extends('layouts.secondary')

@section('title', 'Aspirantes')

@section('page-title', 'Aspirantes')

@section('page-subtitle', 'Información para nuevos ingresos')

@section('banner')
    <x-banner imagen="img/aspirante.png" texto="Bienvenido Aspirante" />
@endsection

@section('content')


    <div class="section-card mb-3">
        <div class="row align-items-center">
            {{-- LICENCIATURA --}}
            <div class="col-md-8">
                <h5 class="fw-bold">Proceso de Inscripción a Licenciatura</h5>
                <p>
                    Los procesos de admisión de nuevo ingreso tanto de licenciatura como de posgrado son equitativos y transparentes y no diferencian en cuanto a género, condición socioeconómica y diversidad.Todo el proceso de ingreso inicia con la aprobación de la Convocatoria de Ingreso a los Programas de Licenciatura por parte del Consejo Universitario y su emisión a principios de cada año.Los pasos que conforman el Proceso de Ingreso se siguen a través del Sistema de Información del Proceso de Ingreso al que se tiene acceso por medio del Sitio del Proceso de Ingreso a las Licenciaturas de la UADY:
                </p>
            </div>
            {{-- CARD --}}
            <div class="col-md-7">
                <div class="custom-card">
                    <img src="{{ asset('img/licenciatura.png') }}" alt="Imagen">
                    <div class="card-body-custom">
                        <h6 class="fw-bold">Contacto</h6>
                        <p class="text-muted small">
                            staff.seleccion@correo.uady.mx <br>
                            (999) 930 01 30 Ext. 74148
                        </p>
                        <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                            Ver más →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-card mb-3">
        <div class="row align-items-start">
            {{-- TEXTO --}}
            <div class="col-md-8">
                <h5 class="fw-bold">Proceso de Inscripción al Posgrado</h5>
                <p>
                    Este Proceso está diseñado especialmente para seleccionar a los aspirantes que desean cursar alguno de los Programas de Posgrado que ofrece la Universidad Autónoma de Yucatán. Toda persona que desee ingresar a alguno de nuestros Programas de Posgrado deberá registrarse en el Sistema de Información para el Proceso de Selección, mismo al que se tiene acceso a través del Portal para el Proceso de Ingreso al Posgrado de la UADY:
                </p>
            </div>

            {{-- CARD --}}
            <div class="col-md-7">
                <div class="custom-card">
                    <img src="{{ asset('img/licenciatura.png') }}" alt="Imagen">
                    <div class="card-body-custom">
                        <h6 class="fw-bold">Contacto</h6>
                        <p class="text-muted small">
                            staff.seleccion@correo.uady.mx <br>
                            (999) 930 01 30 Ext. 74148
                        </p>
                        <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                            Ver más →
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    

@endsection