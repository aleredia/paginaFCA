@extends('layouts.secondary')

@section('title', 'Egresados')

@section('page-title', 'Egresados')

@section('page-subtitle', 'Información para los Egresados')

@section('banner')
    <x-banner imagen="img/egresado.png" texto="Bienvenido Egresados" />
@endsection

@section('content')

    {{-- Centro de Innovación Pedagógica --}}
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">PCentro de Innovación Pedagógica</h5>
            <p>
                El Centro de Innovación Pedagógica (CIP) de la Facultad de Contaduría y Administración (FCA) de la Universidad Autónoma de Yucatán (UADY) impulsa la mejora continua de la práctica docente y la calidad educativa. Su propósito es apoyar a los docentes mediante la innovación pedagógica, la investigación educativa y la integración de tecnologías emergentes, fomentando un aprendizaje significativo y pertinente.
            </p>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/inovacion.png') }}" alt="Imagen">
                <div class="card-body-custom">
                    <p class="text-muted small">
                        ¡Explora más sobre el CIP y únete a la innovación educativa!
                    </p>
                    <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                        Ver más →
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- PERSONAL DOCENTE --}}
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">Personal Docente de la Facultad de Contaduría y Administración</h5>
            <p>
                La Facultad cuenta con 52 maestros de Tiempo Completo, de los cuales 22 (el 42%) cuenta con la certificación de la ANFECA, 26 tienen reconocimiento de Perfil Deseable PRODEP (50%) y 8 (el 15%) están adscritos al Sistema Nacional de Investigadores (SNI), del Conacyt. Complementan nuestra planta docente 4 profesores de Medio Tiempo y 108 de asignatura, todos profesionales altamente calificados, con amplia experiencia laboral y reconocida trayectoria en sus respectivas ramas, que en suma, hacen un total de 164 profesores.<br><br><br><b>HAY QUE PONER UNA TABLOTA DE LOS CORREOS DE LOS MAESTROS</b>
            </p>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/docentes.jpg') }}" alt="Imagen">
                <div class="card-body-custom">
                    <h6 class="fw-bold">Personal</h6>
                    <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                        Ver más →
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- BILBIOTECA --}}
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">Servicios de la biblioteca del campus</h5>
            <p>
                La Biblioteca del Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, cuenta con un amplio acervo de material bibliográfico de las áreas de Ciencias Sociales: Antropología, Psicología, Educación, Economía, Comercio Internacional, Derecho, Administración, Turismo, Comunicación, Literatura, Enseñanza del Inglés, etc. Dicho acervo está conformado por libros, tesis, publicaciones periódicas, folletos, discos compactos, bases de datos, entre otros.
            </p>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/biblioteca.png') }}" alt="Imagen">
                <div class="card-body-custom">
                    <h6 class="fw-bold">Servicios</h6>
                    <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                        Ver más →
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection