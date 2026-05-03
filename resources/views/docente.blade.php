@extends('layouts.secondary')

@section('title', 'Docentes')

@section('page-title', 'Docentes')

@section('page-subtitle', 'Información para los docentes')

@section('banner')
    <x-banner imagen="img/docente.png" texto="Bienvenido Docente" />
@endsection

@section('content')

    {{-- Centro de Innovación Pedagógica --}}
   <div class="row mb-5"> 
    <div class="col-12 mb-4"> 
        <h5 class="fw-bold">Centro de Innovación Pedagógica</h5>
        <p>
            El Centro de Innovación Pedagógica (CIP) de la Facultad de Contaduría y Administración (FCA) de la Universidad Autónoma de Yucatán (UADY) impulsa la mejora continua de la práctica docente y la calidad educativa. Su propósito es apoyar a los docentes mediante la innovación pedagógica, la investigación educativa y la integración de tecnologías emergentes, fomentando un aprendizaje significativo y pertinente.
        </p>
    </div>
    
    <div class="col-12">
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
<div class="row mb-4">
    
    <div class="col-12 mb-4">
        <h5 class="fw-bold">Personal Docente de la Facultad de Contaduría y Administración</h5>
        <p>
            La Facultad cuenta con 164 profesores altamente calificados, con amplia experiencia laboral y reconocida trayectoria.
        </p>
    </div>

    <div class="col-12">
        <div class="custom-card">
            <img src="{{ asset('img/docentes.jpg') }}" alt="Imagen" class="img-fluid">
            <div class="card-body-custom">
                <h6 class="fw-bold">Personal</h6>
                <a href="{{ route('aspirante') }}" class="btn-ver-mas">
                    Ver más →
                </a>
            </div>
        </div>
    </div>

</div>

    {{-- TABLA --}}
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4" style="width: 30%">Nombre</th>
                                    <th style="width: 40%">Correo</th>
                                    <th class="pe-4" style="width: 30%">Especialidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($docentes as $docente)
                                    <tr>
                                        <td class="ps-4 fw-bold text-primary">{{ $docente->nombre }}</td>
                                        <td>
                                            <a href="mailto:{{ $docente->email }}" class="text-secondary text-decoration-none">
                                                <i class="bi bi-envelope me-2"></i>{{ $docente->email }}
                                            </a>
                                        </td>
                                        <td class="pe-4">{{ $docente->especialidad }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-5 text-muted">
                                            No hay docentes registrados actualmente.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $docentes->links() }}
            </div>
        </div>
    </div>

    {{-- BIBLIOTECA --}}
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">Servicios de la biblioteca del campus</h5>
            <p>
                La Biblioteca del Campus de Ciencias Sociales cuenta con un amplio acervo de material bibliográfico especializado.
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