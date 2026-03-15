<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultad de Contaduría y Administración @yield('title', 'Inicio')</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bg-uady-gold { 
            background-color: #c99700; }
        .bg-uady-blue { 
            background-color: #0b3b60; }
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
            
            <div class="col-md-2 d-none d-md-flex align-items-center justify-content-center p-3">
                <img src="{{ asset('img/uady.png') }}"class="img-fluid" style="max-height: 110px;">
            </div>

            <div class="col-12 col-md-10 d-flex flex-column">
                
                <div class="d-flex flex-wrap justify-content-between align-items-center p-3 flex-grow-1">
                    
                    <div class="d-flex flex-column align-items-center mx-auto mx-md-4">
                        <span class="text-uady-blue fw-bold mb-2 fs-5">"Luz, Ciencia y Verdad"</span>
                        <div class="input-group input-group-sm border-bottom border-secondary border-2">
                           <x-search-bar>Buscar...</x-search-bar>
                        </div>
                    </div>

                    <div class="d-none d-md-flex gap-4">
                        <x-button href="#" text="Servicios en línea">
                            <svg width="24" 
                            height="24" 
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </x-button>

                        <x-button href="#" text="Correo">
                            <svg width="24" 
                                height="24" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </x-button>

                        <x-button href="#" text="Calendario">
                            <svg width="24" 
                                height="24" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </x-button>

                        
                        <x-button href="#" text="Personal">
                            <svg width="24" 
                                height="24" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                        </x-button>

                          <x-button href="#" text="Protocolo de género">
                          <svg xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor" 
                                width="24" 
                                height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </x-button>

                    </div>
                </div>

                <nav class="navbar navbar-expand-sm bg-uady-gold py-1 nav-uady-gold">
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav gap-2 gap-md-5">
                            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Aspirantes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Estudiantes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Docentes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Egresados</a></li>
                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-expand-sm bg-uady-blue py-2 nav-uady-blue">
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav gap-2 gap-md-5 text-center">
                            <li class="nav-item"><a class="nav-link" href="#">Nuestra Facultad</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Oferta Educativa</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Investigación</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Vinculación</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Internacionalización</a></li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>
        {{-- FIN HEADER --}}





    <main class="container-fluid p-0">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>