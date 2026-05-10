@extends('layouts.secondary')

@section('title', 'Docentes')
@section('page-title', 'Portal del Docente')
@section('page-subtitle', 'Recursos y herramientas académicas')

@section('banner')
    <x-banner imagen="img/docente.png" texto="Bienvenido a tu espacio, Docente" />
@endsection

@section('content')

    {{-- TEXTO--}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-8">
            <h4 class="fw-bold text-uady-blue">Innovación y Excelencia Académica</h4>
            <p class="text-muted">
                La Facultad de Contaduría y Administración impulsa la mejora continua de la práctica docente. 
                Aquí encontrarás acceso directo a los servicios del CIP, gestión de personal y recursos bibliográficos.
            </p>
        </div>
    </div>

    {{-- CARDS--}}
    <div class="row g-4 mb-5">
        <!-- Card CENTRO DE INOVACION -->
        <div class="col-md-4">
            <div class="custom-card">
                <img src="{{ asset('img/inovacion.png') }}" alt="CIP">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold">Centro de Innovación (CIP)</h6>
                        <p class="small text-muted">El Centro de Innovación Pedagógica (CIP) de la Facultad de Contaduría y Administración (FCA) de la Universidad Autónoma de Yucatán (UADY) impulsa la mejora continua de la práctica docente y la calidad educativa. Su propósito es apoyar a los docentes mediante la innovación pedagógica, la investigación educativa y la integración de tecnologías emergentes, fomentando un aprendizaje significativo y pertinente.</p>
                    </div>
                    <p class="small text-muted">DEl CIP ofrece recursos y formación continua para desarrollar metodologías innovadoras que fortalezcan las competencias pedagógicas del profesorado, promoviendo una educación crítica y orientada al desarrollo sostenible. Además, apoya la implementación del Modelo Educativo para la Formación Integral (MEFI), colocando al estudiante en el centro del aprendizaje.</p>
                </div>
            </div>
        </div>

        <!-- PERSONAL -->
        <div class="col-md-4">
            <div class="custom-card">
                <img src="{{ asset('img/docentes.jpg') }}" alt="Personal">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold">Personal Docente</h6>
                        <p class="small text-muted">La Facultad cuenta con 52 maestros de Tiempo Completo, de los cuales 22 (el 42%) cuenta con la certificación de la ANFECA, 26 tienen reconocimiento de Perfil Deseable PRODEP (50%) y 8 (el 15%) están adscritos al Sistema Nacional de Investigadores (SNI), del Conacyt. Complementan nuestra planta docente 4 profesores de Medio Tiempo y 108 de asignatura, todos profesionales altamente calificados, con amplia experiencia laboral y reconocida trayectoria en sus respectivas ramas, que en suma, hacen un total de 164 profesores.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- BIBLIOTECA -->
        <div class="col-md-4">
            <div class="custom-card">
                <img src="{{ asset('img/biblioteca.png') }}" alt="Biblioteca">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold">Centro de Innovación (CIP)</h6>
                        <p class="small text-muted">La Biblioteca del Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, cuenta con un amplio acervo de material bibliográfico de las áreas de Ciencias Sociales: Antropología, Psicología, Educación, Economía, Comercio Internacional, Derecho, Administración, Turismo, Comunicación, Literatura, Enseñanza del Inglés, etc.</p>
                    </div>
                    <p class="small text-muted">Dicho acervo está conformado por libros, tesis, publicaciones periódicas, folletos, discos compactos, bases de datos, entre otros.También cuenta con una sección de colecciones especiales con más de 14,000 volúmenes de libros y revistas principalmente, dichos materiales provienen de diversos acervos personales, como la colección de la Antropóloga Amalia Cardós, la colección del Abog. Francisco Paoli Bolio y la del poeta Fernando Espejo Méndez, por mencionar algunas.</p>
                </div>
            </div>
        </div>
    </div>

    {{--TABLA --}}
    <div class="section-gray px-4">
        <div class="row">
            <div class="col-12 mb-4">
                <h5 class="fw-bold text-uady-blue">Directorio de Profesores</h5>
                <p class="small text-muted">Consulta el contacto y especialidad de los docentes de la facultad.</p>
            </div>
            
            <div class="col-12">
                <div class="table-wrapper">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Especialidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($docentes as $docente)
                                    <tr>
                                        <td class="fw-bold text-primary">{{ $docente->nombre }}</td>
                                        <td>
                                            <a href="mailto:{{ $docente->email }}" class="text-secondary text-decoration-none">
                                                <i class="bi bi-envelope me-2"></i>{{ $docente->email }}
                                            </a>
                                        </td>
                                        <td>{{ $docente->especialidad }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4">No hay registros.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $docentes->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection