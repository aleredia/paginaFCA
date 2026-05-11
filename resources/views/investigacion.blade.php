@extends('layouts.secondary')

@section('title', 'Investigación')
@section('page-title', 'Investigación')
@section('page-subtitle', 'Impulsando el conocimiento y la innovación académica')

@section('banner')
    <x-banner imagen="img/inv.png" texto="Ciencia con Pertinencia Social" />
@endsection

@section('content')

    {{-- COORDINACIÓN E INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12">
            <h4 class="fw-bold text-uady-blue">Coordinación de Investigación</h4>
            <p class="text-muted" style="text-align: justify;">
                La Coordinación de Investigación depende de la <strong>Unidad de Posgrado e Investigación</strong> de la Facultad. Nuestro objetivo principal es coordinar la actividad investigadora de los profesores en torno a las líneas de investigación general de la Facultad, contribuyendo al avance de la contaduría, las finanzas, la mercadotecnia y las innovaciones tecnológicas.
            </p>
        </div>
    </div>

    {{-- OBJETIVOS Y IMPACTO  --}}
    <div class="row g-4 mb-5">
        
        <div class="col-md-6">
            <div class="custom-card">
                {{-- Puedes usar la imagen de la clase/conferencia que subiste --}}
                <img src="{{ asset('img/investigacion_fca.jpg') }}" alt="Investigación FCA">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Compromiso Global</h6>
                        <p class="small text-muted" style="text-align: justify;">
                            Nuestros proyectos apuntan al logro de los <strong>Objetivos de Desarrollo Sostenible (ODS)</strong> de la ONU, promoviendo la habilitación de profesores de tiempo completo para desarrollar investigación de alta calidad.
                        </p>
                    </div>
                    <a href="#" class="btn-ver-mas mt-auto">Ver proyectos ODS →</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="custom-card shadow-sm">
                <div class="card-body-custom">
                    <h6 class="fw-bold text-uady-blue">Cuerpos Académicos y Grupos de Investigación</h6>
                    <p class="small text-muted" style="text-align: justify;">
                        Contamos con cuatro cuerpos académicos reconocidos por el <strong>PRODEP</strong> (39% de los PTC) y un grupo de Investigación (14% de los PTC).
                    </p>
                    
                    <div class="bg-light p-3 rounded mb-3 border-start border-4 border-uady-gold">
                        <p class="mb-0 text-uady-blue fw-bold" style="font-size: 1.1rem;">+50% de los PTC</p>
                        <p class="text-muted small mb-0">Están generando o aplicando conocimientos actualmente.</p>
                    </div>
                    
                    <a href="#" class="btn-ver-mas mt-auto">Conocer los grupos →</a>
                </div>
            </div>
        </div>

    </div>

    {{--  ÁREAS DE INVESTIGACIÓN --}}
    <div class="section-gray px-4 py-5 mb-5" style="background-color: #f1f5f9; border-radius: 15px;">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h5 class="fw-bold text-uady-blue mb-4">Disciplinas Clave</h5>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <span class="badge-custom">Contaduría</span>
                    <span class="badge-custom">Finanzas</span>
                    <span class="badge-custom">Ámbito Legal-Fiscal</span>
                    <span class="badge-custom">Mercadotecnia</span>
                    <span class="badge-custom">Administración</span>
                    <span class="badge-custom">Innovación Tecnológica</span>
                </div>
                <div class="mt-5">
                    <p class="text-muted small">¿Eres docente y buscas desarrollar un proyecto de investigación?</p>
                    <a href="#" class="btn btn-primary px-4" style="background-color: #021A54; border: none; border-radius: 50px;">
                        Contactar Coordinación
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection