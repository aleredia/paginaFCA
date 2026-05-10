@extends('layouts.secondary')

@section('title', 'Estudiantes')
@section('page-title', 'Estudiantes')
@section('page-subtitle', 'Información que puede ser útil')

@section('banner')
    <x-banner imagen="img/estudiante.jpg" texto="Tu futuro comienza aquí" />
@endsection

@section('content')

    {{-- INTRODUCCIÓN --}}
    <div class="row mb-5 align-items-center">
        <div class="col-lg-12">
            <h4 class="fw-bold text-uady-blue">Servicios que ofrece la facultad a los estudiantes
            </h4>
            <p class="text-muted" style="text-align: justify;">
                Los procesos de admisión de nuevo ingreso tanto de licenciatura como de posgrado en la <strong>FCA UADY</strong> son equitativos, transparentes y diversos. Todo el proceso se rige bajo las convocatorias oficiales emitidas a principios de cada año por el Consejo Universitario.
            </p>
        </div>
    </div>

    {{-- SERVICIOS (LAS CARDS) --}}
    <div class="row g-4 mb-5">
        
        <!-- CAFI -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/licenciatura.png') }}" alt="CAFI">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Centro de Atención a la Formación Integral</h6>
                        <p class="small text-muted" style="text-align: justify;">
                            El Centro de Atención a la Formación Integral (CAFI) agrupa a todas la coordinaciones administrativas relacionadas con la formación integral de nuestros estudiantes. Aquí encontrarás todo lo que necesitas saber sobre Becas, Programa de Inducción a la Vida Universitaria, Programa Padrino Académico, Programa de Tutoría Académica, Servicio Social, Prácticas Profesionales, Bolsa de Trabajo, Movilidad Estudiantil, Programa de Emprendedores, Acreditación de Matemáticas, Asignaturas Libres, Arte, Cultura y Deportes.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- BECAS -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/maestria.png') }}" alt="BECAS">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Coordinación de Becas y Programa Padrino Académico</h6>
                        <p class="small text-muted" style="text-align: justify;">
                           La Facultad de contaduría y Administración impulsa acciones para reducir la deserción escolar, identificando la falta de recursos económicos como una de sus principales causas, lo que dio origen al programa Padrino Académico, cuyo objetivo es evitar que los alumnos abandonen sus estudios por motivos financieros mediante el apoyo de la iniciativa privada, egresados y sociedad en general.
                        </p>
                        <div class="bg-light p-2 rounded mb-3">
                            <p class="text-muted small mb-0">
                                <i class="bi bi-envelope-fill me-2"></i>Dra. Ligia María Río Herrera<br>
                                <i class="bi bi-telephone-fill me-2"></i>ligia.rio@correo.uady.mx
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LIBRES -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/libres.png') }}" alt="LIBRES">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Coordinación de Cultura y Asignaturas Libres</h6>
                        <p class="small text-muted" style="text-align: justify;">
                           La Coordinación de Cultura se encarga de la realización de diferentes actividades culturales que ya son parte de la identidad de la Facultad de Contaduría y Administración, tales como la Muestra de Altares Janal Pixán, Concurso de Canto FCA, exposiciones y recitales, por nombrar algunas. También se encarga de coordinar la impartición de asignaturas artísticas y culturales, como: Ritmos Latinos, Taller de Guitarra, Talleres de Teatro, Pintura, Apreciación del Arte y Apreciación Cinematográfica, entre otras.
                        </p>
                        <div class="bg-light p-2 rounded mb-3">
                            <p class="text-muted small mb-0">
                                <i class="bi bi-envelope-fill me-2"></i>LMNI Richard Edward Ojeda Lara
                                <br>
                                <i class="bi bi-telephone-fill me-2"></i>richard.ojeda@correo.uady.mx
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MATEMATICAS -->
        <div class="col-md-6">
            <div class="custom-card">
                <img src="{{ asset('img/mate.png') }}" alt="MATE">
                <div class="card-body-custom">
                    <div>
                        <h6 class="fw-bold text-uady-blue">Coordinación del Programa de Acreditación de Matemáticas
                        </h6>
                        <p class="small text-muted" style="text-align: justify;">
                           La Coordinación de este Programa tiene como objetivo planear, organizar y ejecutar de manera oportuna y transparente los procesos de acreditación de Matemáticas en el nivel licenciatura, mediante la elaboración y difusión de convocatorias, la publicación de listas de aspirantes admitidos y de resultados, así como la coordinación de cursos de nivelación, con el fin de garantizar que el estudiantado acredite las competencias matemáticas requeridas para su tránsito académico.
                        </p>
                        <div class="bg-light p-2 rounded mb-3">
                            <p class="text-muted small mb-0">
                                <i class="bi bi-envelope-fill me-2"></i>LCC Miguel Ángel Suaste Escalante
                                <br>
                                <i class="bi bi-telephone-fill me-2"></i>miguel.suaste@correo.uady.mx
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- BLOQUE QUE ES EQUIVALENTE A LA TABLA DE MAESTROS --}}
    <div class="section-gray px-4 py-5 mb-5">
        <div class="row text-center">
            <div class="col-12">
                <h5 class="fw-bold text-uady-blue mb-3">¿Tienes dudas sobre que estudiar?</h5>
                <p class="text-muted">Consulta nuestra oferta académica.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary px-4 py-2" style="border-radius: 50px; background-color: #021A54; border: none;">
                        Oferta
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection