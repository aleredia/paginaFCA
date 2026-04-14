@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <x-hero imagen="img/fondoo.jpg">
        Facultad de Contaduría<br>y Administración
    </x-hero>

    <div class="w-100 bg-uady-gold text-white text-center py-3">
        <p class="m-0 fs-6">Bienvenidos a la Facultad de Contaduría y Administración</p>
    </div>


    {{-- NOTICIAS - CARRUSEL --}}
    <div class="container py-5">
        <h2 class="text-uady-blue fw-semibold mb-4">Noticias</h2>
        <div id="noticiasCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <x-card 
                                title="{{ $evento1->titulo }}"
                                image="{{ asset('img/' . $evento1->imagen) }}"
                                date="{{ $evento1->fecha }}"
                                description="{{ $evento1->descripcion }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $evento2->titulo }}"
                                image="{{ asset('img/' . $evento2->imagen) }}"
                                date="{{ $evento2->fecha }}"
                                description="{{ $evento2->descripcion }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $evento3->titulo }}"
                                image="{{ asset('img/' . $evento3->imagen) }}"
                                date="{{ $evento3->fecha }}"
                                description="{{ $evento3->descripcion }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $evento4->titulo }}"
                                image="{{ asset('img/' . $evento4->imagen) }}"
                                date="{{ $evento4->fecha }}"
                                description="{{ $evento4->descripcion }}"
                            />
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <x-card 
                                title="{{ $evento5->titulo }}"
                                image="{{ asset('img/' . $evento5->imagen) }}"
                                date="{{ $evento5->fecha }}"
                                description="{{ $evento5->descripcion }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $evento6->titulo }}"
                                image="{{ asset('img/' . $evento6->imagen) }}"
                                date="{{ $evento6->fecha }}"
                                description="{{ $evento6->descripcion }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $evento7->titulo }}"
                                image="{{ asset('img/' . $evento7->imagen) }}"
                                date="{{ $evento7->fecha }}"
                                description="{{ $evento7->descripcion }}"
                            />
                        </div>

                        <div class="text-center mt-5">
                            <a href="{{ route('inicio') }}" class="btn btn-outline-primary px-5 py-3 rounded-0 fw-bold" 
                            style="border-color: #0b3b60; color: #0b3b60; border-width: 2px;">
                                VER MÁS CURSOS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Controles --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-uady-blue rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-uady-blue rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>



    {{-- AGENDA - CARRUSEL --}}
    <div class="container py-5">
        <h2 class="text-uady-blue fw-semibold mb-4">Agenda Digital Universitaria</h2>
        <div id="agendaCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <x-card 
                                title="{{ $curso1->titulo }}"
                                image="{{ asset('img/' . $curso1->imagen) }}"
                                date="{{ $curso1->fecha }}"
                                time="{{ $curso1->hora }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $curso2->titulo }}"
                                image="{{ asset('img/' . $curso2->imagen) }}"
                                date="{{ $curso2->fecha }}"
                                time="{{ $curso2->hora }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $curso3->titulo }}"
                                image="{{ asset('img/' . $curso3->imagen) }}"
                                date="{{ $curso3->fecha }}"
                                time="{{ $curso3->hora }}"
                            />
                        </div>
                        <div class="col">
                            <x-card 
                                title="{{ $curso4->titulo }}"
                                image="{{ asset('img/' . $curso4->imagen) }}"
                                date="{{ $curso4->fecha }}"
                                time="{{ $curso4->hora }}"
                            />
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <x-card 
                                title="{{ $curso5->titulo }}"
                                image="{{ asset('img/' . $curso5->imagen) }}"
                                date="{{ $curso5->fecha }}"
                                time="{{ $curso5->hora }}"
                            />
                        </div>
                        {{-- BOTÓN PARA VER MÁS CURSOS --}}
                        <div class="text-center mt-5">
                            <a href="{{ route('inicio') }}" class="btn btn-outline-primary px-5 py-3 rounded-0 fw-bold" 
                            style="border-color: #0b3b60; color: #0b3b60; border-width: 2px;">
                                VER MÁS CURSOS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Controles --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#agendaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-uady-blue rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#agendaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-uady-blue rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    

    {{-- REDES SOCIALES --}}
    <div class="container py-5">
        <h2 class="text-uady-blue fw-semibold mb-4">Medios digitales</h2>
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