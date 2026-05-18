@extends('layouts.secondary')

@section('title', 'Espacios de la Facultad')
@section('page-title', 'Vinculación')
@section('page-subtitle', 'aqui debe ir algo y no se que poneeeeeeeeer')
@section('banner')
    <x-banner imagen="img/bannerCarreras.jpg" texto="Bienvenido Egresados" />
@endsection

@section('content')
{{-- CAMBIAR ESTOOOOO--}}
    <x-card-vinculacion 
        image="img/mkt.png"
        text="Diseñamos campañas y contenidos digitales basados en la investigación de la empresa, los consumidores, los competidores y las tendencias del mercado. Definimos el tipo de contenido, los canales y los tiempos ideales para posicionar la marca y generar clientes potenciales."
        buttonText="Ver Más"
        buttonHref=""
    />

       <x-card-vinculacion 
        image="img/branding.png"
        text="Diseñamos estrategias para definir la identidad y percepción de la marca, construir una conexión emocional con el público y diferenciarse de la competencia. Creamos una imagen coherente y memorable a través de elementos como nombre, logotipo, paleta de colores, personalidad, mensaje y estrategia de comunicación."
        buttonText="Ver Más"
        buttonHref=""
    />

      <x-card-vinculacion 
        image="img/diseñoImg.png"
        text="Diseño o rediseño de logotipos, Manual de identidad corporativa o institucional, Diseño publicitario para medios digitales"
        buttonText="Ver Más"
        buttonHref=""
    />

        <x-card-vinculacion 
        image="img/invMercado.png"
        text="Recolectamos, analizamos e interpretamos información sobre consumidores, competencia, mercado y conceptos de comunicación para facilitar la toma de decisiones estratégicas."
        buttonText="Ver Más"
        buttonHref=""
    />

        <x-card-vinculacion 
        image="img/servMkt.png"
        text="Plan Estratégico de Mercadotecnia, Estrategias de precios, Estrategias y gestión de ventas"
        buttonText="Ver Más"
        buttonHref=""
    />

         <x-card-vinculacion 
        image="img/servAdmin.png"
        text="Control de inventario, Consultoría administrativa, Manual Organizacional, Perfiles de puesto"
        buttonText="Ver Más"
        buttonHref=""
    />

         <x-card-vinculacion 
        image="img/servFinanzas.png"
        text="Perfiles de puesto, Formulación y evaluación de proyectos de inversión, Elaboración y control de presupuestos"
        buttonText="Ver Más"
        buttonHref=""
    />

         <x-card-vinculacion 
        image="img/servOrien.png"
        text="Asesoría especializada en materia mercantil, fiscal y laboral para garantizar el cumplimiento normativo, optimizar procesos y proteger los intereses de la empresa."
        buttonText="Ver Más"
        buttonHref=""
    />



{{-- GALERÍA DE INSTALACIONES--}}
<div class="container-fluid px-lg-5 mb-5">
    <div class="row g-4">
        
        
        <x-mosaico
            col="col-md-8" 
            height="400px"
            image="img/gesell.png"
            title="Cámara Gesell FCA"
            description="Incluye grabación de audio y video, sala principal para 16 personas y observación para 18. Equipada con tecnología de punta para investigación de mercados y psicología organizacional."
        />

       
        <x-mosaico
            col="col-md-4" 
            height="400px"
            image="img/audiovisual.png"
            title="Sala Audiovisual"
            description="Capacidad para 70 personas. Ideal para conferencias híbridas, equipada con proyectores de alta gama y mobiliario ergonómico."
        />

        <x-mosaico
            col="col-12" 
            height="450px"
            image="img/auditorio.png"
            title="Auditorio 'CP Enrique López Novelo'"
            description="El recinto más importante de nuestra facultad. Capacidad expandible hasta 280 personas, audio Bose surround y climatización inteligente."
        />

    </div>
</div>
@endsection
