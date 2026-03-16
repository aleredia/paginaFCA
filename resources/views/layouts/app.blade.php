<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facultad de Contaduría y Administración @yield('title', 'Inicio')</title>
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        <style>
            .bg-uady-gold { 
                background-color: #c99700; }
            .bg-uady-blue { 
                background-color: #002e5f; }
            .text-uady-blue {
                color: #0b3b60; }
            .text-uady-gold { 
                color: #c99700; }    

            .nav-uady-gold .nav-link { 
                color: #111827; font-weight: 500; transition: color 0.3s; }
            .nav-uady-gold .nav-link:hover { 
                color: #ffffff; }

            .nav-uady-blue .nav-link { 
                color: #ffffff; transition: color 0.3s; }
            .nav-uady-blue .nav-link:hover { 
                color: #d1d5db; }

                
        </style>
    </head>

    <body class="bg-light">

        {{-- HEADER --}}
        <header class="container-fluid px-0 bg-white shadow-sm">
            <div class="row g-0">

                {{-- LOGO --}}
                <div class="col-md-2 d-none d-md-flex align-items-center justify-content-center p-3">
                    <img src="{{ asset('img/uady.png') }}" class="img-fluid" style="max-height: 90px;">
                </div>

                <div class="col-12 col-md-10 d-flex flex-column">
                    
                    {{-- PARTE BLANCA--}}
                    <div class="d-flex flex-wrap justify-content-between align-items-center p-3 flex-grow-1">
                        <div class="d-flex flex-column align-items-center mx-auto mx-md-4">
                            <span class="text-uady-blue fw-bold mb-2 fs-5">"Luz, Ciencia y Verdad"</span>
                            <div class="input-group input-group-sm border-bottom border-secondary border-2">
                                <x-search-bar>Buscar...</x-search-bar>
                            </div>
                        </div>

                        <div class="d-none d-md-flex gap-4">
                            @foreach($apartados->slice(0,5) as $apartado)
                                <x-button href="#" text="{{ $apartado->nombre }}">
                                    @if($apartado->id == 1)
                                        <i class="bi bi-laptop"></i>
                                    @elseif($apartado->id == 2)
                                        <i class="bi bi-envelope"></i>
                                    @elseif($apartado->id == 3)
                                        <i class="bi bi-calendar"></i>
                                    @elseif($apartado->id == 4)
                                        <i class="bi bi-person"></i>
                                    @elseif($apartado->id == 5)
                                        <i class="bi bi-chat-dots"></i>
                                    @endif
                                </x-button>
                            @endforeach
                        </div>

                    </div>

                    {{-- PARTE AMARILLA --}}
                    <nav class="navbar navbar-expand-sm bg-uady-gold py-1">
                        <div class="container-fluid justify-content-center">
                            <ul class="navbar-nav gap-2 gap-md-5">
                                @foreach($apartados->slice(5,5) as $apartado)
                                    <li class="nav-item">
                                        <a class="nav-link text-dark fw-bold" href="#">{{ $apartado->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>

                    {{-- PARTE AZUL--}}
                    <nav class="navbar navbar-expand-sm bg-uady-blue py-2">
                        <div class="container-fluid justify-content-center">
                            <ul class="navbar-nav gap-2 gap-md-5 text-center">
                                @foreach($apartados->slice(10,5) as $apartado)
                                    <li class="nav-item">
                                        <a class="nav-link text-white fw-medium" href="#">{{ $apartado->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </header>
        {{-- FIN HEADER --}}

        <main class="container-fluid p-0">
            @yield('content')
            
            {{-- FOOTER --}}
            <footer class="bg-uady-blue text-white py-4 mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                            <p class="small mb-0">Sistema de atención a usuarios(Tecnologías de Información)</p>
                            <p class="small mb-0">Sistema de atención a usuarios (Servicios Generales)</p>
                            <p class="small mb-0">Servicios de Control Escolar</p>
                            <p class="small mb-0">UADY 100% Libre de Humo de Tabaco</p>
                            <p class="small mb-0">Aviso de Privacidad para los Alumnos</p>
                            <p class="small mb-0">Aviso Integral de Privacidad - Cámaras de Vigilancia FCA</p>
                            <p class="small mb-0">Preguntas Frecuentes</p>
                            <p class="small mb-0">Contacto: comunicacion.fca@correo.uady.mx</p>
                        </div>
                        
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <p class="small mb-0">Facultad de Contaduría y Administración</p>
                        </div>
                        
                        <div class="col-md-4 text-center text-md-end">
                            <div class="d-flex justify-content-center justify-content-md-end gap-3">
                                <a href="https://www.facebook.com/fca.uady.mx" class="text-white hover-gold"><i class="bi bi-facebook fs-5"></i></a>
                                <a href="https://www.instagram.com/fca.uady/" class="text-white hover-gold"><i class="bi bi-instagram fs-5"></i></a>
                                <a href="https://x.com/FcaUady" class="text-white hover-gold"><i class="bi bi-twitter-x fs-5"></i></a>
                                <a href="https://www.youtube.com/channel/UCbj82IJy8Q9p4yUu5if-Vcg" class="text-white hover-gold"><i class="bi bi-youtube fs-5"></i></a>
                                <a href="https://www.tiktok.com/@fca.uady" class="text-white hover-gold"><i class="bi bi-tiktok fs-5"></i></a>
                                <a href="https://mx.linkedin.com/company/posgrados-fca-uady" class="text-white hover-gold"><i class="bi bi-linkedin fs-5"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                            <br>
                            <p class="small mb-0">Protocolo de violencia de género</p>
                            <p class="small mb-0">Aviso Integral de Privacidad - Cámaras de Vigilancia</p>
                            <p class="small mb-0">Catálogo de solicitudes y tiempos de atención</p>
                            <p class="small mb-0">Transparecia</p>
                            <p class="small mb-0">Bibliotecas</p>
                            <p class="small mb-0">Mapa de sitio</p>
                        </div>
                        
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <p class="small mb-0"> © Todos los Derechos Reservados, UADY 2026</p>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                                        <a href="https://comunicacion.uady.mx/radio--universidad/bienvenida" class="text-white hover-gold"><i class="bi bi-broadcast fs-5"></i></a>
                                        <a href="https://www.facebook.com/face.uady/" class="text-white hover-gold"><i class="bi bi-facebook fs-5"></i></a>
                                        <a href="https://www.tiktok.com/@uadyinstitucional?is_from_webapp=1&sender_device=pc" class="text-white hover-gold"><i class="bi bi-tiktok fs-5"></i></a>
                                        <a href="https://www.youtube.com/user/UADYInstitucional" class="text-white hover-gold"><i class="bi bi-youtube fs-5"></i></a>
                                        <a href="https://www.instagram.com/uady_institucional/" class="text-white hover-gold"><i class="bi bi-instagram fs-5"></i></a>
                                        <a href="https://x.com/UADYoficial" class="text-white hover-gold"><i class="bi bi-twitter-x fs-5"></i></a>
                                        <a href="https://www.linkedin.com/company/uadyinstitucional" class="text-white hover-gold"><i class="bi bi-linkedin fs-5"></i></a>
                                        <a href="https://engage.cloud.microsoft/main/users/eyJfdHlwZSI6IlVzZXIiLCJpZCI6IjE1NDg1OTg4MDkifQ?domainRedirect=true" class="text-white hover-gold"><i class="bi bi-microsoft fs-5"></i></a>
                                    </div>
                            
                                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                                        <a href="https://uady.turnitin.com/" class="text-white hover-gold"><i class="bi bi-phone fs-5"></i></a>
                                        <a href="https://open.spotify.com/show/6JPr4Lk6vMbYsDGFwT0Obe?si=83239cc6047e4f1a&nd=1&dlsi=892a13b1a90d4ab9" class="text-white hover-gold"><i class="bi bi-spotify fs-5"></i></a>
                                        <a href="https://comunicacion.uady.mx/canal--uady" class="text-white hover-gold"><i class="bi bi-laptop fs-5"></i></a>
                                        <a href="https://www.youtube.com/user/uadytv" class="text-white hover-gold"><i class="bi bi-laptop fs-5"></i></a>
                                        <a href="https://www.youtube.com/channel/UCps3dWJry_asU0SHowQgq5w" class="text-white hover-gold"><i class="bi bi-laptop fs-5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                </div>
            </footer>



        </main>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>