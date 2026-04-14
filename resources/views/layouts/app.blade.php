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
                background-color: #021A54; }
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
                
            .body {
                font-family: 'Segoe UI', sans-serif;
                background: #f8fafc;
            }

            /* HEADER*/
            .header {
                background: #021A54;
                border-bottom: 1px solid #e8ebe5;
                position: sticky;
                top: 0;
                z-index: 1000;
            }

            /* LOGO */
            .logo {
                height: 55px;
            }

            .brand-text {
                font-size: 14px;
                line-height: 1.2;
            }

            .brand-text strong {
                display: block;
                font-size: 15px;
                color: #ffffff;
            }

            .brand-text span {
                font-size: 12px;
                color: #ffffff;
            }

            /* NAV */
            .nav-main .nav-link {
                color: #ffffff;
                font-weight: 500;
                padding: 8px 12px;
                border-radius: 8px;
                transition: all 0.25s ease;
            }

            .nav-main .nav-link:hover {
                background: #c99700;
                color: #202020;
            }

            /* BOTONES SUPERIORES */
            .quick-link {
                font-size: 13px;
                color: #ffffff;
                text-decoration: none;
                padding: 6px 10px;
                border-radius: 6px;
                transition: 0.3s;
            }

            .quick-link:hover {
                background: #c99700;
                color: #202020;
            }

            /* SEARCH */
            .search-box {
                position: relative;
            }

            .search-box input {
                border-radius: 20px;
                padding: 8px 15px 8px 35px;
                border: 1px solid #e5e7eb;
                background: #c99700;
                width: 220px;
                transition: 0.3s;
            }

            .search-box input:focus {
                outline: none;
                border-color: #eb2525;
                background: white;
                box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
            }

            .search-box i {
                position: absolute;
                top: 50%;
                left: 10px;
                transform: translateY(-50%);
                color: white;
            }

            .bg-footer-custom {
                background-color: #021A54;
            }

            /*ESTILOS TABLAS*/
            .table-modern {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .row-item {
                background: white;
                padding: 15px 20px;
                border-radius: 12px;
                transition: all 0.25s ease;
            }

            /* BADGE */
            .badge-custom {
                background: #c99700;
                color: #002e5f;
                padding: 6px 12px;
                border-radius: 20px;
                font-size: 12px;
            }

            /* BOTON */
            .btn-ver {
                text-decoration: none;
                font-size: 13px;
                font-weight: 600;
                color: #2563eb;
                transition: 0.3s;
            }

            .btn-ver:hover {
                color: #1d4ed8;
            }
                
        </style>
    </head>

    <body class="bg-light">

        {{-- HEADER --}}
        <x-header :apartados="$apartados" />
        {{-- FIN HEADER --}}

        <main class="container-fluid p-0">
            @yield('content')
            
            {{-- FOOTER --}}
            <x-footer />
        </main>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>