@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <x-hero imagen="img/fondoo.jpg">
        Facultad de Contaduría <br>
        y Administración
    </x-hero>

    <div class="w-100 bg-uady-blue text-white text-center py-3">
        <p class="m-0 fs-6">Bienvenidos a la Facultad de Contaduría y Administración</p>
    </div>


    {{-- NOTICIAS - CARRUSEL --}}
    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-5">
                Noticias Destacadas
            </h2>
            <div class="row g-4">
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
    </section>

    {{-- AGENDA - CARRUSEL --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title mb-5">
                Agenda Universitaria
            </h2>
            <div class="row g-4">
                @foreach([$curso1,$curso2,$curso3,$curso4] as $curso)
                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="fw-bold">
                                    {{ $curso->titulo }}
                                </h5>
                                <p class="text-muted mb-0">
                                    {{ $curso->fecha }}
                                </p>
                            </div>
                            <div class="text-uady-gold fw-bold">
                                {{ $curso->hora }}
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
    <div class="container py-5">
        <div class="d-flex align-items-center gap-2 mb-4">
            <h4 class="text-uady-blue fw-bold mb-0">Convocatorias</h4>
        </div>
        <div class="table-modern">
            @foreach($convocatorias as $convocatoria)
            <div class="row-item d-flex flex-wrap justify-content-between align-items-center">
                <div class="col-md-4 fw-semibold text-uady-blue">
                    {{ $convocatoria->nombre }}
                </div>
                <div class="col-md-2 text-muted small">
                    <i class="bi bi-calendar-event me-1 text-warning"></i>
                    {{ $convocatoria->inicio }}
                </div>
                <div class="col-md-2 text-muted small">
                    <i class="bi bi-calendar-x me-1 text-danger"></i>
                    {{ $convocatoria->cierre }}
                </div>
                 <div class="col-md-2">
                    <span class="badge badge-custom">
                        {{ $convocatoria->tipo }}
                    </span>
                </div>
                <div class="col-md-2 text-end">
                    <a href="#" class="btn-ver">Ver</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- avisos --}}
    <div class="container py-5">
        <div class="d-flex align-items-center gap-2 mb-4">
            <h4 class="text-uady-blue fw-bold mb-0">Avisos</h4>
        </div>
        <div class="table-modern">
            @foreach($avisos as $aviso)
            <div class="row-item d-flex flex-column flex-md-row justify-content-between gap-3">
                <div class="flex-grow-1">
                    <div class="fw-semibold text-uady-blue">
                        {{ $aviso->nombre }}
                    </div>
                    <div class="text-muted small mt-1">
                        {{ Str::limit($aviso->descripcion) }}
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 text-muted small">
                    <div>
                        <i class="bi bi-calendar-event me-1 text-warning"></i>
                        {{ $aviso->inicio }}
                    </div>
                    <div>
                        <a href="#" class="btn-ver">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    



    

    
    
@endsection