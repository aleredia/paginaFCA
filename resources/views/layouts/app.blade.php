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
                border-radius: 40px;
            }

            /*DROPDOWN DEL NAVBAR*/
            .dropdown-custom{
                position: relative;
            }

            .dropdown-menu-custom{
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                background: white;
                min-width: 200px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0,0,0,0.15);
                z-index: 1000;
            }

            .dropdown-item-custom{
                display: block;
                padding: 12px 15px;
                text-decoration: none;
                color: black;
                transition: 0.3s;
            }

            .dropdown-item-custom:hover{
                background: #f2f2f2;
            }

            .dropdown-custom:hover .dropdown-menu-custom{
                display: block;
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
                border-radius: 40px;
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

            /* HERO*/
            .hero{
                min-height: 90vh;
                overflow: hidden;
            }

            .hero-title{
                font-size: clamp(2.5rem, 6vw, 5rem);
                line-height: 1.1;
            }

            /* TITULOS */
            .section-title{
                font-size: 2rem;
                font-weight: 700;
                color: #021A54;
            }

            /* CARDS MODERNAS */
            .news-card{
                border: none;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 8px 20px rgba(0,0,0,0.06);
            }

            /* EVENTOS */
            .event-card{
                background: white;
                border-left: 5px solid #c99700;
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            }

            .row-item:hover{
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            }

            /*FOOTER*/
            .bg-footer-custom {
                background-color: #021A54;
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