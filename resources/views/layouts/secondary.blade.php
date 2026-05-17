<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - @yield('title', 'Página')</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .text-uady-blue {
            color: #0b3b60;
        }

        /* HEADER DE CONTENIDO */
        .page-header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
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
        
        
        /*FOOTER*/
        .bg-footer-custom {
            background-color: #021A54;
        }


        /* BANNER DE LAS VISTAS */
        .banner-container {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            border-radius: 12px;
            background: #021A54;
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* CARDS DE LAS VISTAS */
        .main-card {
            background: rgb(255, 255, 255);
            border-radius: 14px;
            padding: 30px;
             align-items: center;
            text-align: center;
        }

        .custom-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            align-items: center;
            text-align: center;
            margin-top: 50px;
        }

        .custom-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body-custom {
            padding: 15px;
        }

        .btn-ver-mas {
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            color: #2563eb;
        }

        .btn-ver-mas:hover {
            color: #1d4ed8;
        }


        /* CARDS */
        .section-gray {
            background-color: #f0f2f5;
            padding: 60px 0;
            margin: 40px -30px;
            border-radius: 20px;
        }

        .custom-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
            margin-top: 0 !important; 
        }


        .card-body-custom {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem;
        }

        /* TABLA DOCENTES*/
        .table-wrapper {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .main-card {
            text-align: left !important;
            padding: 20px !important;
        }

        /* ESTILOS PARA LA OFERTA */
          .bg-uady-gold-soft {
        background-color: rgba(201, 151, 0, 0.08); 
        transition: 0.3s;
        }

        .bg-uady-gold-soft:hover {
            background-color: rgba(201, 151, 0, 0.15);
        }

        .zoom-box {
            cursor: pointer;
        }

        .zoom-box img {
            transition: transform 0.6s ease;
        }

        .zoom-box:hover img {
            transform: scale(1.1); 
        }

        .btn-uady-blue {
            background-color: #021A54;
            color: white;
            border-radius: 50px;
            padding: 10px 25px;
            transition: 0.3s;
            border: none;
        }

        .btn-uady-blue:hover {
            background-color: #c99700;
            color: white;
            transform: translateY(-2px);
        }

        .reveal-block {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .reveal-block.active {
            opacity: 1;
            transform: translateY(0);
        }

        .border-uady-gold-thin {
            border: 1px solid rgba(201, 151, 0, 0.3);
        }

/*ESTUDIANTES*/
    .service-card-new{
        background: white;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: .35s ease;
        border: 1px solid #c99700;
        height: 100%;
    }

    .service-card-new:hover{
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(0,0,0,0.12);
    }

    .service-image-new{
        position: relative;
        height: 240px;
        overflow: hidden;
    }

    .service-image-new img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s;
    }

    .service-card-new:hover .service-image-new img{
        transform: scale(1.08);
    }

    .service-overlay-new{
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(2,26,84,.75), transparent);
    }

    .service-body-new{
        padding: 25px;
    }

    .service-title-new{
        color: #021A54;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .service-description-new{
        color: #6b7280;
        line-height: 1.7;
        text-align: justify;
        font-size: 0.95rem;
    }

    /* CONTACTO */

    .contact-card-new{
        margin-top: 25px;
        background: linear-gradient(135deg, #021A54, #0b3b60);
        border-radius: 20px;
        padding: 18px;
    }

    .contact-wrapper-new{
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .contact-photo-new{
        width: 90px;
        height: 90px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid rgba(255,255,255,.2);
        flex-shrink: 0;
    }

    .contact-photo-new img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .contact-info-new h6{
        color: white;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .contact-info-new p{
        color: rgba(255,255,255,.9);
        margin-bottom: 5px;
        font-size: 0.92rem;
    }

    .contact-info-new i{
        color: #facc15;
    }

    .cta-estudiantes{
        background: linear-gradient(135deg, #021A54, #0b3b60);
        border-radius: 28px;
        padding: 60px 30px;
        text-align: center;
        color: white;
    }

    .btn-estudiantes{
        background: #c99700;
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: .3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-estudiantes:hover{
        background: #ddb52a;
        color: white;
        transform: translateY(-2px);
    }


</style>
        
    </style>
</head>

<body>

    {{-- HEADER --}}
    <x-header :apartados="$apartados" />

    {{-- ENCABEZADO DE PÁGINA--}}
    <div class="page-header py-3 mb-4" 
        style="background: #021A54;">
        <div class="container">
            <h2 class="fw-bold mb-1" style="color: #ffffff;">
                @yield('page-title')
            </h2>
            {{-- SUBTÍTULO --}}
            <p class="small mb-0" style="color: #e0e0e0;">
                @yield('page-subtitle')
            </p>
        </div>
    </div>

    {{-- BANNER OPCIONAL --}}
    @hasSection('banner')
        <div class="container">
            @yield('banner')
        </div>
    @endif


    {{-- CONTENIDO --}}
    <main class="container py-5">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>