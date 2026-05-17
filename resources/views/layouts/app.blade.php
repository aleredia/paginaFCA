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
                background: #d1d5db;
            }

            /* HEADER*/
            .header {
                background: #ffffff;
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
                color: #111827;
            }

            .brand-text strong {
                display: block;
                font-size: 15px;
                color: #111827;
            }

            .brand-text span {
                font-size: 12px;
                color: #111827;
            }

            /* NAV */
            .nav-main .nav-link {
                color: #111827;
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
                color:#111827;
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

            .quick-link {
                font-size: 13px;
                color:#111827;
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

            /*HERO PRINCIPAL*/
            .hero-modern{
                position: relative;
                min-height: 100vh;
                display: flex;
                align-items: center;
                overflow: hidden;
                background: #021A54;
            }

            .hero-bg{
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transform: scale(1.03);
            }

            .hero-overlay{
                position: absolute;
                inset: 0;
                background: rgba(5, 7, 90, 0.8);
            }

            .hero-heading{
                font-size: clamp(3rem, 7vw, 6rem);
                font-weight: 900;
                line-height: 1.02;
                color: white;
                margin-bottom: 24px;
                text-align: center;
            }

            .hero-description{
                font-size: 1.15rem;
                line-height: 1.8;
                color: rgba(255,255,255,0.82);
                margin-bottom: 38px;
                text-align: center;
            }

            .hero-bottom-fade{
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 140px;
                background:
                linear-gradient(
                    to top,
                    #f8fafc,
                    transparent
                );
            }

            /* AVISOS DESPLEGABLES */
            .aviso-toggle{
                transition: 0.3s ease;
            }

            .aviso-toggle:hover{
                background: rgba(2,26,84,0.03);
            }

            .aviso-arrow{
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: #021A54;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1rem;
                transition: 0.3s ease;
                flex-shrink: 0;
            }

            .aviso-toggle[aria-expanded="true"] .aviso-arrow{
                transform: rotate(180deg);
                background: #c99700;
                color: #1e1e1e;
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
                font-size: 3rem;
                font-weight: 800;
                color: #021A54;
                line-height: 1.1;
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

            
            /*CONVOCATORIAS*/
            .convocatorias-section{
                background: #E3E3E3;
                position: relative;
                overflow: hidden;
            }

            .btn-explorar{
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: #021A54;
                color: white;
                text-decoration: none;
                padding: 14px 24px;
                border-radius: 50px;
                font-weight: 600;
                transition: 0.3s ease;
            }

            .btn-explorar:hover{
                background: #c99700;
                color: #1e1e1e;
                transform: translateY(-2px);
            }

            .conv-card{
                background: rgba(255,255,255,0.75);
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255,255,255,0.4);
                border-radius: 28px;
                padding: 26px;
                transition: all 0.35s ease;
                position: relative;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(2,26,84,0.06);
            }

            .conv-top{
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 28px;
            }

            .conv-badge{
                background: #021A54;
                color: white;
                padding: 8px 16px;
                border-radius: 50px;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: .5px;
            }

            .conv-name{
                font-size: 1rem;
                font-weight: 350;
                color: #021A54;
                margin-bottom: 28px;
                line-height: 1.4;
            }

            .conv-dates{
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 18px;
            }

            .date-box{
                display: flex;
                flex-direction: column;
            }

            .date-label{
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
                color: #94a3b8;
                margin-bottom: 4px;
            }

            .date-value{
                font-size: 15px;
                font-weight: 700;
                color: #142a0f;
            }

            .conv-footer{
                margin-top: 30px;
            }

            .conv-btn{
                display: flex;
                align-items: center;
                justify-content: space-between;
                text-decoration: none;
                background: #ffffff;
                border: 1px solid #e2e8f0;
                padding: 14px 18px;
                border-radius: 18px;
                color: #021A54;
                font-weight: 700;
                transition: 0.3s ease;
            }

            .conv-btn:hover{
                background: #021A54;
                color: white;
                border-color: #021A54;
            }


            /*AGENDA*/
            .agenda-section{
                background:#ffffff;
                position: relative;
                overflow: hidden;
            }

            .agenda-btn-top{
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: #c99700;
                color: #1e1e1e;
                text-decoration: none;
                padding: 14px 24px;
                border-radius: 50px;
                font-weight: 700;
                transition: 0.3s ease;
            }

            .agenda-btn-top:hover{
                background: #021A54;
                color: white;
                transform: translateY(-2px);
            }

            .agenda-card{
                position: relative;
                background: rgba(255,255,255,0.78);
                backdrop-filter: blur(14px);
                border-radius: 28px;
                padding: 28px;
                overflow: hidden;
                border: 1px solid rgba(255,255,255,0.5);
                box-shadow: 0 12px 35px rgba(2,26,84,0.08);
                transition: all 0.35s ease;
            }

            .agenda-content{
                position: relative;
                z-index: 2;
                display: flex;
                justify-content: space-between;
                gap: 25px;
                flex-wrap: wrap;
            }

            .agenda-left{
                display: flex;
                gap: 18px;
                align-items: flex-start;
            }

            .agenda-tag{
                display: inline-block;
                background: rgba(201,151,0,0.12);
                color: #a87900;
                padding: 7px 14px;
                border-radius: 50px;
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: .7px;
                margin-bottom: 14px;
            }

            .agenda-name{
                font-size: 1.35rem;
                font-weight: 700;
                color: #021A54;
                margin: 0;
                line-height: 1.4;
            }

            .agenda-right{
                display: flex;
                flex-direction: column;
                gap: 18px;
                justify-content: center;
            }

            .agenda-date-box{
                display: flex;
                flex-direction: column;
            }

            .agenda-date-label{
                font-size: 11px;
                color: #98b894;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-bottom: 4px;
            }

            .agenda-date{
                font-weight: 700;
                color: #2a0f0f;
            }

            .agenda-time-box{
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: #021A54;
                color: white;
                padding: 10px 16px;
                border-radius: 14px;
                font-size: 14px;
                font-weight: 600;
                width: fit-content;
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