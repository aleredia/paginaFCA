@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <x-hero>
        Facultad de Contaduría<br>y Administración
    </x-hero>

    <div class="w-100 bg-uady-blue text-white text-center py-3">
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
   <div class="container py-3">
    <div class="d-flex align-items-center" style="cursor: pointer;" 
         data-bs-toggle="collapse" data-bs-target="#collapseTableConvocatorias" 
         aria-expanded="false" aria-controls="collapseTableConvocatorias">
        <h4 class="text-uady-blue mb-0">Convocatorias</h4>
        <i class="ms-2 bi bi-chevron-down"></i> </div>

    <div class="collapse mt-3" id="collapseTableConvocatorias">
        <div class="table-responsive shadow-sm">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Inicio</th>
                        <th>Cierre</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($convocatorias as $convocatoria)
                    <tr>
                        <td><a href="#">{{ $convocatoria->nombre }}</a></td>
                        <td>{{ $convocatoria->inicio }}</td>
                        <td>{{ $convocatoria->cierre }}</td>
                        <td>{{ $convocatoria->tipo }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<hr class="container">

    {{-- avisos --}}
 <div class="container py-3">
    <div class="d-flex align-items-center" style="cursor: pointer;" 
         data-bs-toggle="collapse" data-bs-target="#collapseTableAvisos" 
         aria-expanded="false" aria-controls="collapseTableAvisos">
        <h4 class="text-uady-blue mb-0">Avisos</h4>
        <i class="ms-2 bi bi-chevron-down"></i>
    </div>

    <div class="collapse mt-3" id="collapseTableAvisos">
        <div class="table-responsive shadow-sm">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Inicio</th>
                        <th>Cierre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($avisos as $aviso)
                    <tr>
                        <td><a href="#">{{ $aviso->nombre }}</a></td>
                        <td>{{ $aviso->descripcion }}</td>
                        <td>{{ $aviso->inicio }}</td>
                        <td>{{ $aviso->cierre }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    
        






@endsection