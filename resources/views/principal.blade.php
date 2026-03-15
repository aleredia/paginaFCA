{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <x-hero>
        Facultad de Contaduría<br>y Administración
    </x-hero>

    <div class="w-100 bg-uady-blue text-white text-center py-3">
        <p class="m-0 fs-6">Bienvenidos a la Facultad de Contaduría y Administración</p>
    </div>

 {{--NOTICIAS --}}
<div class="container py-5">
    <h2 class="text-uady-blue fw-semibold mb-4">Noticias</h2>
    
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        
        <div class="col">
            <x-card 
                title="ENTRE RAÍCES Y CAMINOS DEL MAYAB"
                image="{{ asset('img/pintura.png') }}"
                date="06 de febrero de 2026"
                description="Nueva exposición pictórica en FCA"
            />
        </div>

        <div class="col">
            <x-card 
                title="INICIA EL PROGRAMA DE INDUCCIÓN A LA VIDA UNIVERSITARIA"
                image="{{ asset('img/induccion.png') }}"
                date="21 de enero de 2026"
                description="Con la bienvenida al alumnado de nuevo ingreso"
            />
        </div>

        <div class="col">
            <x-card 
                title="CLAUSURAN LOS TALLERES ARTÍSTICOS Y CULTURALES"
                image="{{ asset('img/taller.png') }}"
                date="09 de diciembre de 2025"
                description="Con ello cierran los festejos por el 63 aniversario"
            />
        </div>

        <div class="col">
            <x-card 
                title="NOCHE DE ORGULLO EN FCA"
                image="{{ asset('img/logro.png') }}"
                date="25 de noviembre de 2025"
                description="Distinguen logros académicos, deportivos y de impacto social"
            />
        </div>

    </div>
</div>
@endsection