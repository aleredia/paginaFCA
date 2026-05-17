@extends('layouts.secondary')

@section('title', 'Docentes')
@section('page-title', 'Portal del Docente')
@section('page-subtitle', 'Recursos y herramientas académicas')


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

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
    
    {{-- Centro de Innovación --}}
    <x-mosaico
        col="col-md-4" 
        height="380px"
        image="img/inovacion1.png"
        title="Centro de Innovación (CIP)"
        description="El Centro de Innovación Pedagógica (CIP) de la FCA UADY impulsa la mejora continua de la práctica docente y la calidad educativa integrando tecnologías emergentes. Ofrece recursos y formación continua apoyando la implementación del Modelo Educativo para la Formación Integral (MEFI)."
    />

    {{-- Personal Docente --}}
    <x-mosaico 
        col="col-md-4" 
        height="380px"
        image="img/docentes1.png"
        title="Personal Docente"
        description="La Facultad cuenta con 164 profesores en total: 52 de Tiempo Completo (42% con certificación ANFECA, 50% con Perfil Deseable PRODEP y 15% adscritos al SNI Conacyt), complementados por 4 profesores de Medio Tiempo y 108 de asignatura altamente calificados."
    />

    {{-- Biblioteca --}}
    <x-mosaico
        col="col-md-4" 
        height="380px"
        image="img/biblioteca1.png"
        title="Biblioteca del Campus"
        description="Cuenta con un amplio acervo bibliográfico de Ciencias Sociales y Económico-Administrativas conformado por libros, tesis y bases de datos digitales. Alberga colecciones especiales con más de 14,000 volúmenes de importantes acervos personales como el de la Antr. Amalia Cardós."
    />

</div>

    {{--TABLA --}}
    <div class="section-gray px-4 mb-5">
    <div class="row">
        <div class="col-12 mb-4">
            <h5 class="fw-bold text-uady-blue">Directorio de Profesores</h5>
            <p class="small text-muted">Consulta el contacto y especialidad de los docentes de la facultad.</p>
        </div>
        
        <div class="col-12">
            <div class="table-wrapper shadow-sm rounded-4 bg-white p-3 overflow-hidden">
                <div class="table-responsive">
                    <table id="tabla-docentes" class="table table-hover align-middle mb-0 w-100">
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
                                    <td class="fw-bold text-uady-blue ps-3">{{ $docente->nombre }}</td>
                                    <td>
                                        <a href="#" class="text-secondary text-decoration-none">
                                            <i class="bi bi-envelope me-2 text-uady-gold"></i>{{ $docente->email }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge bg-uady-gold-badge">{{ $docente->especialidad }}</span>
                                    </td>
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
        </div>
    </div>
</div>
@endsection

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabla-docentes').DataTable({
                "pageLength": 10,
                "lengthMenu": [5, 10, 25, 50],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ profesores",
                    "zeroRecords": "No se encontraron profesores que coincidan.",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ profesores totales)",
                    "search": "Buscar profesor:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
