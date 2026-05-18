@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <x-hero imagen="img/fondoo.jpg">
        Facultad de Contaduría y Administración
    </x-hero>


    {{-- NOTICIAS - CARRUSEL --}}
    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-5">
                Noticias Destacadas
            </h2>
            <div id="noticiasCarousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            @foreach([$evento1,$evento2,$evento3,$evento4] as $evento)
                            <div class="col-md-6 col-lg-3">
                                <div class="card news-card h-100">
                                    <img src="{{ asset('img/' . $evento->imagen) }}"
                                        class="card-img-top"
                                        style="height:220px; object-fit:cover;">
                                    <div class="card-body">
                                        <small class="text-muted">
                                            {{ $evento->fecha }}
                                        </small>
                                        <h5 class="mt-2 fw-bold">
                                            {{ $evento->titulo }}
                                        </h5>

                                        <p class="text-muted small">
                                            {{ Str::limit($evento->descripcion, 90) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            @foreach([$evento5,$evento6,$evento7] as $evento)
                            <div class="col-md-6 col-lg-3">
                                <div class="card news-card h-100">
                                    <img src="{{ asset('img/' . $evento->imagen) }}"
                                        class="card-img-top"
                                        style="height:220px; object-fit:cover;">
                                    <div class="card-body">
                                        <small class="text-muted">
                                            {{ $evento->fecha }}
                                        </small>
                                        <h5 class="mt-2 fw-bold">
                                            {{ $evento->titulo }}
                                        </h5>
                                        <p class="text-muted small">
                                            {{ Str::limit($evento->descripcion, 90) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- CONTROLES DE ABAJO --}}
                <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                    <button class="btn btn-outline-dark rounded-circle px-3"
                        type="button"
                        data-bs-target="#noticiasCarousel"
                        data-bs-slide="prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <div class="carousel-indicators position-relative m-0">
                        <button type="button"
                            data-bs-target="#noticiasCarousel"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true">
                        </button>
                        <button type="button"
                            data-bs-target="#noticiasCarousel"
                            data-bs-slide-to="1">
                        </button>
                    </div>
                    <button class="btn btn-outline-dark rounded-circle px-3"
                        type="button"
                        data-bs-target="#noticiasCarousel"
                        data-bs-slide="next">
                        <i class="bi bi-chevron-right"></i>
                    </button>

                </div>

            </div>
        </div>
    </section>


    {{-- AVISOS Y AGENDA --}}
    <section class="agenda-section py-5">

        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-7">
                    <h2 class="section-title mt-3">
                        Avisos y agenda universitaria
                    </h2>
                </div>
                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('calendario') }}" class="agenda-btn-top">
                        Calendario
                        <i class="bi bi-calendar-event ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">
                @foreach([$curso1,$curso2,$curso3,$curso4] as $curso)
                <div class="col-lg-6">
                    <div class="agenda-card h-100">
                        <div class="agenda-content">
                            <div class="agenda-left">
                                <div>
                                    <span class="agenda-tag">
                                        Evento universitario
                                    </span>
                                    <h4 class="agenda-name">
                                        {{ $curso->titulo }}
                                    </h4>
                                </div>

                            </div>

                            <div class="agenda-right">
                                <div class="agenda-date-box">
                                    <span class="agenda-date-label">
                                        Fecha
                                    </span>
                                    <span class="agenda-date">
                                        {{ $curso->fecha }}
                                    </span>
                                </div>
                                <div class="agenda-time-box">
                                    <i class="bi bi-clock-fill"></i>
                                    <span>
                                        {{ $curso->hora }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- REDES SOCIALES --}}
    <div class="container py-5">
        <h2 class="section-title mb-5">
            Medios Digitales
        </h2>
        <div class="row justify-content-center g-4"> 
            <div class="col-md-8">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/qi9tQSY1bFw" 
                            title="Orgullo FCA 2025" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            
            <div class="col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffca.uady.mx&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>


    {{-- CONVOCATORIAS --}}
    <section class="convocatorias-section py-5">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-7">
                    <h2 class="section-title mt-3">
                        Convocatorias y programas
                    </h2>
                </div>
                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <a href="convocatorias" class="btn-explorar">
                        Explorar todas
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">

                @foreach([$convocatoria1,$convocatoria2,$convocatoria3] as $convocatoria)
                <div class="col-lg-4 col-md-6">
                    <div class="conv-card h-100">
                        <div class="conv-top">
                            <span class="conv-badge">
                                {{ $convocatoria->tipo }}
                            </span>
                        </div>
                        <div class="conv-body">
                            <h4 class="conv-name">
                                {{ $convocatoria->nombre }}
                            </h4>
                            <div class="conv-dates">
                                <div class="date-box">
                                    <span class="date-label">
                                        Inicio
                                    </span>
                                    <span class="date-value">
                                        {{ $convocatoria->inicio }}
                                    </span>
                                </div>

                                <div class="date-box">
                                    <span class="date-label">
                                        Cierre
                                    </span>
                                    <span class="date-value">
                                        {{ $convocatoria->cierre }}
                                    </span>
                                </div>
                            </div>
                                <a href="{{ $convocatoria->link }}" 
                                    class="conv-btn"
                                    target="_blank" 
                                    rel="noopener noreferrer">
                                        Ver convocatoria
                                        <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection