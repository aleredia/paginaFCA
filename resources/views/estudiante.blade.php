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
            <h4 class="fw-bold text-uady-blue">
                Servicios que ofrece la facultad a los estudiantes
            </h4>

            <p class="text-muted" style="text-align: justify;">
                Los procesos de admisión de nuevo ingreso tanto de licenciatura como de posgrado en la <strong>FCA UADY</strong> son equitativos, transparentes y diversos. Todo el proceso se rige bajo las convocatorias oficiales emitidas a principios de cada año por el Consejo Universitario.
            </p>
        </div>
    </div>

    {{-- SERVICIOS --}}
    <div class="row g-4 mb-5">

        {{-- CAFI --}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/licenciatura.png') }}" alt="CAFI">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Centro de Atención a la Formación Integral
                    </h5>
                    <p class="service-description-new">
                        El Centro de Atención a la Formación Integral (CAFI) agrupa a todas la coordinaciones administrativas relacionadas con la formación integral de nuestros estudiantes. Aquí encontrarás todo lo que necesitas saber sobre Becas, Programa de Inducción a la Vida Universitaria, Programa Padrino Académico, Programa de Tutoría Académica, Servicio Social, Prácticas Profesionales, Bolsa de Trabajo, Movilidad Estudiantil, etc.
                    </p>
                    {{-- CONTACTO --}}
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/contacto1.jpg') }}" alt="">
                            </div>
                            <div class="contact-info-new">
                                <h6>Mtro. Nombre del Responsable</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    contacto@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    999 999 9999
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BECAS --}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/maestria.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación de Becas y Programa Padrino Académico
                    </h5>
                    <p class="service-description-new">
                        La Facultad de contaduría y Administración impulsa acciones para reducir la deserción escolar, identificando la falta de recursos económicos como una de sus principales causas, lo que dio origen al programa Padrino Académico, cuyo objetivo es evitar que los alumnos abandonen sus estudios por motivos financieros mediante el apoyo de la iniciativa privada, egresados y sociedad en general.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/ligia.png') }}" alt="">
                            </div>
                            <div class="contact-info-new">
                                <h6>Dra. Ligia María Río Herrera</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    ligia.rio@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CULTURA --}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/libres.png') }}" alt="LIBRES">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación de Cultura y Asignaturas Libres
                    </h5>
                    <p class="service-description-new">
                        La Coordinación de Cultura se encarga de la realización de diferentes actividades culturales que ya son parte de la identidad de la Facultad de Contaduría y Administración, tales como la Muestra de Altares Janal Pixán, Concurso de Canto FCA, exposiciones y recitales, por nombrar algunas. También se encarga de coordinar la impartición de asignaturas artísticas y culturales, como: Pintura, Apreciación del Arte y Apreciación Cinematográfica, entre otras.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/richard.png') }}" alt="">
                            </div>
                            <div class="contact-info-new">
                                <h6>LMNI Richard Edward Ojeda Lara</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    richard.ojeda@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MATEMÁTICAS --}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/mate.png') }}" alt="MATE">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación del Programa de Acreditación de Matemáticas
                    </h5>
                    <p class="service-description-new">
                        La Coordinación de este Programa tiene como objetivo planear, organizar y ejecutar de manera oportuna y transparente los procesos de acreditación de Matemáticas en el nivel licenciatura, mediante la elaboración y difusión de convocatorias, la publicación de listas de aspirantes admitidos y de resultados, así como la coordinación de cursos de nivelación, con el fin de garantizar que el estudiantado acredite las competencias matemáticas requeridas para su tránsito académico.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/suaste.png') }}" alt="">
                            </div>
                            <div class="contact-info-new">
                                <h6>LCC Miguel Ángel Suaste Escalante</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    miguel.suaste@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- emprende --}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/emprende.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación de Emprendedores
                    </h5>
                    <p class="service-description-new">
                        La Coordinación de Emprendedores es un área de la Facultad de Contaduría y Administración, orientada a impulsar la cultura emprendedora y el desarrollo de competencias empresariales en el estudiantado, mediante formación académica, asesoría especializada y eventos relacionados con emprendimiento, con el objetivo de transformar ideas en proyectos viables, con enfoque ético, innovador y social.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/anel.png') }}" alt="">
                            </div>
                            <div class="contact-info-new">
                                <h6>	
                                    Dra. Anel Flores Novelo</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    anel.flores@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        {{--coordinacion de mvovilidad--}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/movilidad.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación de Movilidad
                    </h5>
                    <p class="service-description-new">
                        La Coordinación de Movilidad ofrece orientación sobre trámites y becas para realizar movilidad nacional o internacional, con las instituciones con las que la UADY tiene convenio de colaboración. También se brinda atención a estudiantes foráneos y extranjeros, con el afán de hacer su estancia lo más provechosa posible en nuestras aulas.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/valentin.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6> Dr. Valentín Alonso Novelo</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    valentin.alonso@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--SERVICIO--}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/servicio social.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación de Servicio Social, Prácticas Profesionales y Bolsa de Trabajo
                    </h5>
                    <p class="service-description-new">
                        La Coordinación de Servicio Social, Prácticas Profesionales y Bolsa de Trabajo es la entidad encargada de dar seguimiento al cumplimiento de la obligación constitucional que tienen nuestros estudiantes de licenciatura de cumplir con el Servicio Social como parte de su formación, así como de facilitar la inserción laboral exitosa para cumplir con la Práctica Profesional en un entorno real de aprendizaje. 
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/ricardo.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6> CP Ricardo Abraham Espinosa Becerra, MCE</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    abraham.espinosa@correo.uady,mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{--INDUCCION A LA VIDA UNIVERSITARIA--}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/induccion a la vu.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación del Programa de Inducción a la Vida Universitaria
                    </h5>
                    <p class="service-description-new">
                        El Programa de Inducción a la Vida Universitaria, está dirigido a nuestro alumnado de nuevo ingreso, con el fin de proporcionar información relacionada sobre los diferentes programas de atención al estudiante; asimismo, facilita el primer contacto con las autoridades de la Facultad, las coordinaciones de cada licenciatura y organismos estudiantiles. 
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/rodrigo.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6> 	LCA Rodrigo Us May, MA</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    rodrigo.us@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--TUTPRIAS--}}
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/tutoria academica.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación del Programa de Tutoría Académica
                    </h5>
                    <p class="service-description-new">
                        Tiene el propósito de proporcionar al estudiante un acompañamiento y orientación académica personalizada, por parte de un profesor-tutor o tutor FORMADO, durante su desarrollo estudiantil en la FCA, con el fin de mejorar su rendimiento académico, así como detectar oportunamente circunstancias de riesgo.Acudir con tu tutor te apoyará en la solución de dudas, establecimiento de metas y en la toma de decisiones académicas y administrativas.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/ma alejandra.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6>CP María Alejandra Estrada Chacón, MI</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    alejandra.estrada@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/deportiva.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Coordinación Deportiva
                    </h5>
                    <p class="service-description-new">
                        Tiene entre sus funciones coordinar el programa de activación física “Actívate FCA”, planear, calendarizar y organizar actividades y torneos deportivos para el adecuado desarrollo físico-atlético de nuestros alumnos tanto de nivel licenciatura como de posgrado, contribuyendo con la generación de talentos deportivos que puedan representar individual o colectivamente a la Facultad, e incluso formar parte de las selecciones de la UADY.
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/victor.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6>Profr. Víctor Manuel Medina Hernández, MI</h6>
                                <p> Organizador de Actividades Deportivas
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    Tel. móvil (999) 737 2021.
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/ingles.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Programa Institucional de Inglés
                    </h5>
                    <p class="service-description-new">
                       El Programa Institucional de Inglés (PII) ofrece a los estudiantes de licenciatura de la Universidad Autónoma de Yucatán la oportunidad de alcanzar, acreditar o validar el nivel de inglés requerido en sus planes de estudio para su formación universitaria. Es ofrecido por el Centro Institucional de Lenguas (CIL). Al estudiante de licenciatura de nuevo ingreso de la UADY, se le administra el examen diagnóstico EXUBI (Examen de Ubicación de Inglés), para identificar sus conocimientos y nivel sobre el idioma. De este modo, el PII está diseñado para apoyarte a ti, estudiante universitario, a aprender inglés de tal forma que además de cubrir con el requisito de permanencia, también te ayude en tu desarrollo social, académico y en lo futuro también en lo laboral. 
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/alvar.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6> LEII Álvar Serena Cabrera, MINE</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    alvar.serena@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    Coordinador
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="service-card-new">
                <div class="service-image-new">
                    <img src="{{ asset('img/controle.png') }}" alt="BECAS">
                    <div class="service-overlay-new"></div>
                </div>
                <div class="service-body-new">
                    <h5 class="service-title-new">
                        Servicios de Control Escolar

                    </h5>
                    <p class="service-description-new">
                       La labor del Departamento de Control Escolar es fundamental para la Facultad, pues en él se desarrollan múltiples procesos de administración y control de la información de los alumnos. A raíz de la pandemia ocasionada por el COVID 19, se implementaron esquemas que permiten agilizar la prestación de nuestros servicios. Éstos se han mantenido aún después de nuestro regreso a la presencialidad. Entre los servicios que prestamos a nuestros alumnos se encuentran:Constancias diversas. Afiliación al Seguro Facultativo del IMSS. Kárdex. Historial académico. Certificados (parciales o completos).
                        Situación académica (estatus).
                    </p>
                    <div class="contact-card-new">
                        <div class="contact-wrapper-new">
                            <div class="contact-photo-new">
                                <img src="{{ asset('img/diana.png') }}" alt="">
                            </div>
                                <div class="contact-info-new">
                                <h6> Lic. Diana Eugenia Salazar Cardeña</h6>
                                <p>
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    controlescolar.fca@correo.uady.mx
                                </p>
                                <p>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                   Tel. (999) 981 09 26,  ext. 71168
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- ANTES QUE AQUÍ --}}
    </div>

   

    {{-- CTA --}}
    <div class="cta-estudiantes">

        <h3 class="fw-bold mb-3">
            ¿Tienes dudas sobre qué estudiar?
        </h3>

        <p class="mb-4">
            Consulta nuestra oferta académica.
        </p>

        <a href="oferta" class="btn-estudiantes">
            Oferta
        </a>

    </div>

@endsection