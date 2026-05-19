@extends('layouts.secondary')

@section('title', 'Oferta Académica')
@section('page-title', 'Oferta Académica')
@section('page-subtitle', 'Explora nuestra oferta educativa de vanguardia')

@section('banner')
    <x-banner imagen="img/bannerCarreras.jpg" texto="Bienvenido Egresados" />
@endsection

@section('content')
    <div class="container-fluid px-lg-5 overflow-hidden">
        @foreach($licenciaturas as $index => $carrera)
            <x-licenciatura-block 
                image="{{ $carrera->imagen }}" 
                title="{{ $carrera->titulo }}"
                description="{{ $carrera->descripcion }}"
                :reverse="$index % 2 !== 0 ? true : false"
            />
        @endforeach

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