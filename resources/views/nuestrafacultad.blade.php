@extends('layouts.secondary')

@section('title', 'Nuestra Facultad')

@section('page-title', 'Nuestra Facultad')

@section('page-subtitle', 'Conoce la historia, raíces y liderazgo de la FCA')

@section('banner')
    <x-banner imagen="img/hist.png" texto="Historia e Identidad" />
@endsection

@section('content')

    {{-- TODO EL ENCABEZADO--}}
    <div class="container text-center my-5 px-md-5 animate-entrance">
        <span class="text-uady-gold text-uppercase fw-bold tracking-wider mb-2 d-block" style="letter-spacing: 2px; font-size: 0.85rem;">
            <i class="bi bi-shield-check me-1"></i> Nuestra Razón de Ser
        </span>
        <h2 class="fw-extrabold text-uady-blue mb-3 page-section-title">Objetivo Institucional</h2>
        <p class="lead text-muted mx-auto" style="max-width: 850px; font-size: 1.1rem; line-height: 1.7;">
            Al momento de su fundación, este fue su objetivo manifiesto: "La ECA tiene por objeto impartir el conocimiento de las disciplinas contables y jurídicas necesarias para promover una mejor administración en los negocios, de manera que el bienestar y que el progreso que impriman a ellos se refleje también en la prosperidad del Estado".
        </p>
        <div class="custom-divider-line mx-auto mt-4" style="width: 60px; height: 3px; background-color: #c99700; border-radius: 2px;"></div>
    </div>

    {{-- SECCION DE TARJETAS DE LA HISTORIA DE FCA--}}
<div class="generaciones-section-wrapper py-5 my-5">
    <div class="container text-center mb-5">
        <span class="text-uady-gold text-uppercase fw-bold tracking-wider mb-2 d-block" style="letter-spacing: 2px; font-size: 0.85rem;">
            <i class="bi bi-clock-history me-1"></i> Trayectoria
        </span>
        <h2 class="fw-extrabold text-uady-blue m-0">Crónica de Nuestra Evolución</h2>
        <p class="small text-muted mt-2">El paso de la FCA a traves del tiempo.</p>
    </div>

    <div class="container-fluid px-lg-5">
        <div class="timeline-accordion-container-new">
            <div class="container-fluid px-lg-5">
    <div class="timeline-accordion-container-new">
        
        {{-- INICIO DE CLASES --}}
        <x-card-historia 
            id="Clases"
            year="SEPTIEMBRE DE 1962"
            tag="El Primer Ciclo Escolar"
            title="Inicio de Clases"
            shortText="Las clases comenzaron en septiembre de 1962 en el Edificio Central, con el apoyo de profesionales locales."
            :images="['img/clases.png', 'img/clases2.png', 'img/clases3.png']"
        >
            <h5 class="fw-bold text-uady-blue mb-2">Comienzo del viaje académico</h5>
            <p class="text-muted small mb-0" style="line-height: 1.6;">
                Sin un espacio propio, la escuela inició actividades en salones asignados del primer piso de la Universidad. La planta docente fundadora estuvo integrada por los pocos contadores públicos activos en el medio y profesionales de áreas afines comprometidos con la formación integral de los primeros estudiantes.
            </p>
        </x-card-historia>

        {{--  FUNDACIÓN --}}
        <x-card-historia 
            id="Fundacion"
            year="NOVIEMBRE DE 1962"
            tag="El Origen"
            title="Inauguración de la Escuela de Comercio y Administración"
            shortText="El 9 de noviembre de 1962 inició formalmente la historia académica de la institución."
            :images="['img/fundacion1.png', 'img/fundacion2.png', 'img/fundacion3.png']"
        >
            <h5 class="fw-bold text-uady-blue mb-2">Un hito en la educación económico-administrativa</h5>
            <p class="text-muted small mb-0" style="line-height: 1.6;">
              Bajo la rectoría del Abog. Francisco Repetto Milán, el Secretario General de Gobierno, Mario Zavala Traconis, inauguró oficialmente las actividades de la escuela en representación del Gobernador Agustín Franco Aguilar. El acto se celebró como un pilar para el enriquecimiento cultural de la Universidad de Yucatán y el desarrollo de la Patria.
            </p>
        </x->

         {{-- NURVO LOCAL --}}

         <x-card-historia 
            id="NuevoLocal"
            year="FEBRERO DE 1979"
            tag="Expansión y Consolidación"
            title="Nuevo Local"
            shortText="La institución se transforma con nuevas instalaciones y la adopción del doble turno."
            :images="['img/local.png', 'img/local2.png']"
        >
            <h5 class="fw-bold text-uady-blue mb-2">Inauguración del Plantel Chuburná</h5>
            <p class="text-muted small mb-0" style="line-height: 1.6;">
                Para responder al crecimiento de la comunidad estudiantil, la escuela se mudó a la antigua carretera a Chuburná. El estreno del plantel trajo consigo la implementación de los dos turnos (matutino y vespertino) que se mantienen hasta hoy. El nuevo edificio fue inaugurado oficialmente el 10 de febrero de 1979 por el Gobernador Francisco Luna Kan, el Rector Alberto Rosado G. Cantón y autoridades de la SEP.
            </p>
        </x-card-historia>

         {{-- TRASLADO AL CAMPUS --}}

         <x-card-historia 
            id="Traslado"
            year="OCTUBRE DE 2023"
            tag="Nueva Sede"
            title="Traslado al Campus de Ciencias Sociales"
            shortText="Tras 44 años en Chuburná, la Facultad se muda a una sede de vanguardia para potenciar el crecimiento de su comunidad."
            :images="['img/traslado.png', 'img/traslado2.png','img/traslado3.png']"
        >
            <h5 class="fw-bold text-uady-blue mb-2">Cierre de Ciclo en Chuburná y Mudanza al Campus</h5>
            <p class="text-muted small mb-0" style="line-height: 1.6;">
                El 18 de septiembre de 2023, entre mariachis y recuerdos, la sede de Chuburná cerró sus puertas. Pocos días después, el 3 de octubre, la Facultad inició actividades en el Campus de Ciencias Sociales, Económico-Administrativas y Humanidades de la UADY. Encabezada por el rector Carlos Alberto Estrada Pinto y el director David Suárez Pacheco, la nueva e innovadora sede alberga a más de tres mil estudiantes, promoviendo la sinergia interdisciplinaria y el éxito profesional.
            </p>
        </x-card-historia>

    </div>
</div>


        </div>
    </div>
</div>

    {{-- DIRECTORES --}}
    <div class="container-fluid px-lg-5 mb-5 pt-4">
        
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-12 text-center">
                <span class="text-uady-blue text-uppercase fw-bold tracking-wider mb-2 d-block" style="letter-spacing: 2px; font-size: 0.85rem;">
                    <i class="bi bi-person-workspace text-uady-gold me-1"></i> Liderazgo
                </span>
                <h2 class="display-6 fw-extrabold text-uady-gold m-0 text-uppercase" style="font-weight: 800 !important; color: #c99700 !important;">
                    Galería de Directores
                </h2>
                <div class="custom-divider-line mx-auto my-3" style="width: 50px; height: 3px; background-color: #021A54; border-radius: 2px;"></div>
                <p class="text-muted mx-auto mb-0 small" style="max-width: 550px;">
                    Reconocimiento a las gestiones directivas que han guiado el rumbo de nuestra facultad.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <x-alumno-card 
                image="img/direc1.png" 
                name="CP Enrique López Novelo" 
                badge="Junio de 1962 a febrero de 1969"
            >
               Durante su gestión como director, impulsó el crecimiento y fortalecimiento institucional, promoviendo una administración basada en el compromiso, la disciplina y la formación de profesionales preparados para los retos de su época.
            </x-alumno-card>

            <x-alumno-card 
                image="img/direc2.png" 
                name="CP Guido Espadas Cantón" 
                badge="Marzo de 1969 a noviembre de 1971"
            >
                Contador público y destacado servidor público yucateco, impulsó el fortalecimiento académico de la institución y contribuyó al desarrollo urbano y administrativo de Mérida.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc3.png" 
                name=" CP Carlos Manuel Pasos Novelo" 
                badge="<div class='mb-1'>Noviembre de 1971 a julio de 1973</div><div>Agosto de 1977 a agosto de 1982</div>"
>
             Destacó por su amplia trayectoria académica y universitaria, desempeñándose como director de la Facultad de Contaduría y Administración y posteriormente como rector de la UADY de 1991 a 1998.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc4.png" 
                name="CP José Felipe Capetillo Casares" 
                badge="Agosto de 1973 a agosto de 1977"
            >
                Destacó por su participación en el desarrollo profesional y académico de la contaduría en Yucatán, colaborando activamente en organismos colegiados y en iniciativas vinculadas a la formación universitaria.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc5.png" 
                name="CP Miguel Vidal Vázquez" 
                badge="Agosto de 1982 a enero de 1987"
            >
                Reconocido por su compromiso institucional y su experiencia en el servicio público, impulsó el desarrollo académico y administrativo de la facultad y del estado de Yucatán.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc6.png" 
                name="CP Francisco Álvarez Vales" 
                badge="Enero de 1987 a enero de 1995"
            >
                Destacó por su trayectoria académica y su participación en organismos de evaluación y fortalecimiento institucional de la educación superior, contribuyendo al desarrollo de la Facultad de Contaduría y Administración y de la UADY.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc7.png" 
                name="CP Luis Augusto Gamboa Ávila" 
                badge="Enero de 1995 a agosto de 2001"
            >
                Destacó por su labor en la Facultad de Contaduría y Administración y por su trayectoria en el servicio público como Secretario de Hacienda del Estado y director de la Preparatoria Yucatán ‘Mons. Luis Miguel Cantón Marín’.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc8.png" 
                name="CP Manuel de Jesús Escoffié Aguilar" 
                badge="Septiembre de 2001 a diciembre de 2006"
            >
                Es reconocido por su labor académica y administrativa en la Facultad de Contaduría y Administración, así como por su desempeño en la gestión financiera de la UADY, donde fungió como Director General de Finanzas y Administración.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc9.png" 
                name="M. en F. Jorge Humberto Basulto Triay" 
                badge="Julio de 2007 a enero de 2015"
            >
                Fungió como encargado de despacho de la Facultad de Contaduría y Administración de enero a junio de 2007, destacando posteriormente por impulsar el fortalecimiento académico y la calidad educativa de la institución.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc10.png" 
                name="M. en F. Aureliano Martínez Castillo" 
                badge="Enero de 2015 a diciembre de 2022"
            >
                Ccontribuyó al fortalecimiento de la Facultad de Contaduría y Administración y posteriormente se desempeñó como director de Vinculación Universitaria de la UADY.
            </x-alumno-card>

             <x-alumno-card 
                image="img/direc11.png" 
                name="MAIE David Roberto Suárez Pacheco" 
                badge="Director desde el 30 de enero de 2023"
            >
                Fungió como encargado de despacho del 1 al 29 de enero de 2023 y actualmente se desempeña como director de la Facultad de Contaduría y Administración.
            </x-alumno-card>

        </div>
    </div>

@endsection