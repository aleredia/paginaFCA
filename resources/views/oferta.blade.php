@extends('layouts.secondary')

@section('title', 'Oferta Académica')
@section('page-title', 'Nuestros Programas de Licenciatura')
@section('page-subtitle', 'Formación profesional con los más altos estándares de calidad')

@section('banner')
    <x-banner imagen="img/oferta1.png" texto="Tu camino al éxito profesional" />
@endsection

@section('content')

    {{--INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12 text-center">
            <h4 class="fw-bold text-uady-blue">Programas de Licenciatura</h4>
            <p class="text-muted mx-auto" style="max-width: 800px;">
                La Facultad de Contaduría y Administración ofrece cuatro programas de licenciatura diseñados para formar líderes integrales, éticos y altamente competitivos.
            </p>
        </div>
    </div>

    {{-- CARRUSEL --}}
<div class="row mb-5 justify-content-center">
    <div class="col-md-10 col-lg-8 position-relative px-5"> 
        
        <div id="carouselOferta" class="carousel slide" data-bs-interval="false">

            <div class="carousel-inner shadow-lg" style="border-radius: 15px; overflow: hidden; z-index: 1;">

                <div class="carousel-item active">
                    <div class="custom-card border-0 mb-0">

                        {{-- LICENCIATURASS --}}
                        <img src="{{ asset('img/lati.png') }}"
                             class="d-block w-100"
                             alt="ATI"
                             style="height: 400px; object-fit: cover;">

                        <div class="card-body-custom text-center p-4">
                            <h5 class="fw-bold text-uady-blue">
                                Administración de Tecnologías de Información
                            </h5>

                            <p class="text-muted">
                                Liderazgo en la transformación digital y gestión
                                de sistemas de información empresarial.
                            </p>

                            <a href="#" class="btn-ver-mas mt-3">
                                Ver detalles del programa →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="custom-card border-0 mb-0">

                        <img src="{{ asset('img/conta.png') }}"
                             class="d-block w-100"
                             alt="CP"
                             style="height: 400px; object-fit: cover;">

                        <div class="card-body-custom text-center p-4">
                            <h5 class="fw-bold text-uady-blue">
                                Contaduría Pública
                            </h5>

                            <p class="text-muted">
                                Expertos en gestión financiera y auditoría estratégica.
                            </p>

                            <a href="#" class="btn-ver-mas mt-3">
                                Ver detalles del programa →
                            </a>
                        </div>
                    </div>
                </div>

                   <div class="carousel-item">
                    <div class="custom-card border-0 mb-0">

                        <img src="{{ asset('img/merca.png') }}"
                             class="d-block w-100"
                             alt="CP"
                             style="height: 400px; object-fit: cover;">

                        <div class="card-body-custom text-center p-4">
                            <h5 class="fw-bold text-uady-blue">
                                Mercadotecnia y Negocios Internacionales
                            </h5>

                            <p class="text-muted">
                                Expertos en gestión financiera y auditoría estratégica.
                            </p>

                            <a href="#" class="btn-ver-mas mt-3">
                                Ver detalles del programa →
                            </a>
                        </div>
                    </div>
                </div>


                  <div class="carousel-item">
                    <div class="custom-card border-0 mb-0">

                        <img src="{{ asset('img/admin.png') }}"
                             class="d-block w-100"
                             alt="CP"
                             style="height: 400px; object-fit: cover;">

                        <div class="card-body-custom text-center p-4">
                            <h5 class="fw-bold text-uady-blue">
                                Administración
                            </h5>

                            <p class="text-muted">
                                Expertos en gestión financiera y auditoría estratégica.
                            </p>

                            <a href="#" class="btn-ver-mas mt-3">
                                Ver detalles del programa →
                            </a>
                        </div>
                    </div>
                </div>

            </div> {{-- finaaal licenciaturas --}}

            

            {{-- BOTONES --}}
            <x-carrusel-button target="carouselOferta" direction="prev" />
            <x-carrusel-button target="carouselOferta" direction="next" />

        </div>
    </div>
</div>



    {{-- BLOQUE 3 --}}
    <div class="section-gray px-4 py-5 mb-5" style="border-radius: 15px;">
        <div class="row text-center">
            <div class="col-md-8 mx-auto">
                <i class="bi bi-mortarboard-fill text-uady-gold fs-1"></i>
                <h5 class="fw-bold text-uady-blue mt-3">Excelencia Académica UADY</h5>
                <p class="text-muted small">Todos nuestros programas cuentan con acreditaciones nacionales que respaldan la calidad de nuestra enseñanza.</p>
                <div class="mt-4">
                    <a href="{{ route('aspirante') }}" class="btn btn-primary px-4 py-2" style="background-color: #021A54; border: none; border-radius: 50px;">
                        ¿Cómo ingresar?
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection