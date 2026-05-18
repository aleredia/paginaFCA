@extends('layouts.secondary')

@section('title', 'Oferta Académica')
@section('page-title', 'Oferta Académica')
@section('page-subtitle', 'Explora nuestra oferta educativa de vanguardia')

@section('banner')
    <x-banner imagen="img/bannerCarreras.jpg" texto="Bienvenido Egresados" />
@endsection

@section('content')

    <div class="container-fluid px-lg-5 overflow-hidden">
        
        <x-licenciatura-block 
            image="img/conta.png" 
            title="Licenciatura en Contador Público"
            description="Forma profesionistas en contabilidad, auditoría y gestión financiera para la toma de decisiones y cumplimiento empresarial.
"
        />

        <x-licenciatura-block 
            image="img/merca.png" 
            title="Licenciatura en Mercadotecnia y Negocios Internacionales"
            description="Forma profesionales innovadores en mercadotecnia y estrategias digitales para fortalecer la competitividad empresarial.
"
            :reverse="true"
        />

        <x-licenciatura-block 
            image="img/lati.png" 
            title="Licenciatura en Administración de Tecnologías de Información"
            description="Forma profesionales en tecnologías de la información capaces de desarrollar soluciones innovadoras y optimizar procesos organizacionales.
"
        />

        <x-licenciatura-block 
            image="img/admin.png" 
            title="Licenciatura en Administración"
            description="Forma profesionales en administración y mercadotecnia capaces de liderar organizaciones y fortalecer su competitividad."
            :reverse="true"
        />

    </div>
@endsection

<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal-block");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150; 
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            }
        }
    }
    window.addEventListener("scroll", reveal);
    reveal();
</script>
