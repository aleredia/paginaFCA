@extends('layouts.secondary')

@section('title', 'Docentes')

@section('page-title', 'Docentes')

@section('page-subtitle', 'Información para los docentes')

@section('banner')
    <x-banner imagen="img/docente.png" texto="Bienvenido Docente" />
@endsection

@section('content')


    <div class="section-card mb-3">
        <div class="row align-items-center">
            {{-- LICENCIATURA --}}
            <div class="col-md-8">
                <h5 class="fw-bold">Personal Docente de la Facultad de Contaduría y Administración</h5>
                <p>
                    La Facultad cuenta con 52 maestros de Tiempo Completo, de los cuales 22 (el 42%) cuenta con la certificación de la ANFECA, 26 tienen reconocimiento de Perfil Deseable PRODEP (50%) y 8 (el 15%) están adscritos al Sistema Nacional de Investigadores (SNI), del Conacyt. Complementan nuestra planta docente 4 profesores de Medio Tiempo y 108 de asignatura, todos profesionales altamente calificados, con amplia experiencia laboral y reconocida trayectoria en sus respectivas ramas, que en suma, hacen un total de 164 profesores.
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