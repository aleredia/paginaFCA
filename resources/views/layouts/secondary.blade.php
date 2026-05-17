<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - @yield('title', 'Página')</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"rel="stylesheet">

    <style>
        /*COLORES BASE */
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .text-uady-blue {
            color: #0b3b60;
        }

        .z-index-1 {
            z-index: 1;
        }

        /* ETIQUETAS  */
        .header, .bg-footer-custom {
            background: #021A54;
        }

        .header {
            border-bottom: 1px solid #e8ebe5;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .page-header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
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

        /* NAVBAR, LINK Y BOTONES */
        .nav-main .nav-link, .quick-link {
            color: #ffffff;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        .quick-link {
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .nav-main .nav-link:hover, .quick-link:hover {
            background: #c99700;
            color: #202020;
            border-radius: 40px;
        }

        /* MENU */
        .dropdown-custom {
            position: relative;
        }

        .dropdown-menu-custom {
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

        .dropdown-item-custom {
            display: block;
            padding: 12px 15px;
            text-decoration: none;
            color: black;
            transition: 0.3s;
        }

        .dropdown-item-custom:hover {
            background: #f2f2f2;
        }

        .dropdown-custom:hover .dropdown-menu-custom {
            display: block;
        }

        /* CONTENEDORES DE SSECCIONES Y BANNERS*/
        .banner-container {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            border-radius: 12px;
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .section-gray {
            background-color: #f0f2f5;
            padding: 60px 0;
            margin: 40px -30px;
            border-radius: 20px;
        }

        .generaciones-section-wrapper {
            background: linear-gradient(180deg, #fdfdfd 0%, #f4f6f9 50%, #fdfdfd 100%);
            border-top: 1px solid rgba(2, 26, 84, 0.04);
            border-bottom: 1px solid rgba(2, 26, 84, 0.04);
            width: 100%;
        }

        /* TITULOS */
        .page-section-title {
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
            font-weight: 800 !important;
            color: #021A54 !important;
        }

        .small-title-badge {
            letter-spacing: 2px;
            font-size: 0.82rem;
            color: #c99700 !important;
        }

        .custom-section-subtitle {
            font-size: 1.05rem;
            max-width: 600px;
            font-weight: 400;
            line-height: 1.6;
        }

        .custom-divider-line {
            width: 60px;
            height: 3px;
            background-color: #c99700;
            border-radius: 2px;
        }

        /* CARDS */
        .main-card {
            background: white;
            border-radius: 14px;
            padding: 20px !important;
            text-align: left !important;
        }

        .custom-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
            height: 100%;
        }

        .custom-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body-custom {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* BOTONES EN CARDS*/
        .btn-ver-mas {
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            color: #2563eb;
        }

        .btn-ver-mas:hover {
            color: #1d4ed8;
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

        /* badges*/
        .bg-uady-gold-badge {
            background-color: rgba(201, 151, 0, 0.12) !important;
            color: #c99700 !important; 
            font-weight: 600 !important;
            padding: 6px 14px !important;
            border-radius: 30px !important;
            display: inline-block !important;
            font-size: 0.78rem;
            white-space: normal;
            text-shadow: none !important; 
        }

        /* ESTILOS DE VINCULACIÓN */
        .hero-spaces-container {
            position: relative;
            width: 100%;
            background-color: #010c26; 
        }

        .hero-spaces-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            opacity: 0.45;
            z-index: 1;
            background-position: 0px center;
        }

        .hero-spaces-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(1, 12, 38, 0.1) 0%, rgba(1, 12, 38, 0.5) 100%);
            z-index: 2;
        }

        .hero-spaces-content, .hero-btn-container {
            z-index: 3;
        }

        .hero-spaces-content {
            max-width: 600px;
        }

        .hero-spaces-content .small-lead {
            color: #ffffff;
            font-size: 1.05rem;
            line-height: 1.6;
            text-align: justify;
            text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.9);
        }

        .hero-title {
            color: #c99700 !important;
        }

        /*ESTILOS DE MOSAICOS */
        .space-card {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            cursor: pointer;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            border: 1px solid rgba(201, 151, 0, 0.1);
        }

        .space-card:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        }

        .space-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(1, 12, 38, 0) 40%, rgba(1, 12, 38, 0.85) 100%);
            transition: all 0.4s ease-in-out;
        }

        .space-overlay h3 {
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.8);
            transition: transform 0.4s ease;
        }

        .space-description {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transform: translateY(15px);
            transition: opacity 0.4s ease, transform 0.4s ease, max-height 0.4s ease;
            font-size: 0.88rem;
            text-align: justify;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.9);
        }
            
        .space-card:hover .space-overlay {
            background: linear-gradient(180deg, rgba(1, 12, 38, 0.4) 0%, rgba(1, 12, 38, 0.95) 100%);
        }

        .space-card:hover .space-description {
            opacity: 1;
            max-height: 250px; 
            transform: translateY(0);
            margin-top: 8px;
        }

        .space-content-block {
            width: 100%;
        }

        /* ESTILOS DE OFERTA */
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

        .border-uady-gold-thin {
            border: 1px solid rgba(201, 151, 0, 0.3);
        }

        /* ESTILOS DEL DATATABLE */
        .table-wrapper {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .dataTables_filter input {
            border: 1px solid rgba(2, 26, 84, 0.2) !important;
            border-radius: 30px !important;
            padding: 6px 15px !important;
            outline: none;
            transition: 0.3s;
        }

        .dataTables_filter input:focus {
            border-color: #c99700 !important;
            box-shadow: 0 0 0 0.25rem rgba(201, 151, 0, 0.25) !important;
        }

        .page-item.active .page-link {
            background-color: #021A54 !important;
            border-color: #021A54 !important;
            color: white !important;
        }

        .page-link {
            color: #021A54 !important;
        }
        
        .page-link:hover {
            color: #c99700 !important;
        }

        /* ESTILOS DE DOCENTES Y EGRESASDOS */
        /* CARDS */
        .docente-interactive-card {
            height: 380px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            cursor: pointer;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border: 1px solid rgba(2, 26, 84, 0.1);
        }

        .docente-interactive-card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15) !important;
        }

        .docente-card-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(1, 12, 38, 0) 50%, rgba(1, 12, 38, 0.85) 100%);
            transition: all 0.4s ease-in-out;
        }

        .docente-card-overlay h6 {
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.8);
            transition: transform 0.4s ease;
        }

        .docente-card-description {
            opacity: 0;
            max-height: 0;
            transform: translateY(15px);
            transition: opacity 0.4s ease, transform 0.4s ease, max-height 0.4s ease;
        }

        .docente-card-description p {
            color: rgba(255, 255, 255, 0.95);
            text-align: justify;
            text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.9);
        }

        .docente-interactive-card:hover .docente-card-overlay {
            background: linear-gradient(180deg, rgba(1, 12, 38, 0.4) 0%, rgba(1, 12, 38, 0.95) 100%);
        }

        .docente-interactive-card:hover .docente-card-description {
            opacity: 1;
            max-height: 300px; 
            transform: translateY(0);
        }

        /* ALUMNOS DESTACADOS*/
        .profile-honor-card {
            background-color: #ffffff;
            border: 1px solid rgba(2, 26, 84, 0.06) !important;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .profile-honor-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(2, 26, 84, 0.08) !important;
        }

        .profile-honor-card p {
            line-height: 1.5;
            color: #6c757d;
        }

        .profile-honor-img {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border: 4px solid #ffffff; 
            z-index: 2;
            position: relative;
        }

        .avatar-ring {
            position: absolute;
            top: -4px; left: -4px; right: -4px; bottom: -4px;
            border: 2px dashed #c99700;
            border-radius: 50%;
            opacity: 0.5;
            z-index: 1;
            animation: uadyRotateRing 25s linear infinite;
        }

        
        .calarts-list-container {
            border-top: 1px solid rgba(2, 26, 84, 0.12) !important;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(2, 26, 84, 0.02);
            padding: 10px 25px;
        }

        .calarts-row {
            border-bottom: 1px solid rgba(2, 26, 84, 0.15);
            cursor: pointer;
            position: relative;
            z-index: 2;
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        .calarts-row:hover {
            background-color: rgba(2, 26, 84, 0.02);
            padding-left: 15px !important;
        }

        .calarts-row .badge {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .calarts-row:hover .badge {
            transform: rotate(45deg);
            background-color: #021A54;
        }

        .calarts-row:hover .badge i {
            color: white !important;
        }

        
        .egresado-link-card {
            border: 1px solid rgba(2, 26, 84, 0.05);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }

        .egresado-link-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(2, 26, 84, 0.06) !important;
            border-color: rgba(201, 151, 0, 0.3);
        }

        .egresado-link-card h6 {
            transition: color 0.3s ease;
        }

        .egresado-link-card:hover h6 {
            color: #c99700 !important;
        }

        .icon-box-uady {
            width: 54px;
            height: 54px;
            background-color: rgba(2, 26, 84, 0.05);
            flex-shrink: 0; 
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .icon-box-uady i {
            font-size: 1.4rem;
            color: #021A54; 
            transition: color 0.3s ease;
        }

        .egresado-link-card:hover .icon-box-uady {
            background-color: rgba(201, 151, 0, 0.12);
            transform: scale(1.05);
        }

        .egresado-link-card:hover .icon-box-uady i {
            color: #c99700;
        }

        
        .hover-preview-box {
            position: fixed;
            width: 320px;
            height: 220px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            pointer-events: none;
            opacity: 0;
            transform: translate(-50%, -50%) rotate(3deg) scale(0.9);
            transition: opacity 0.3s ease, transform 0.3s ease;
            box-shadow: 0 15px 35px rgba(1, 12, 38, 0.25);
            z-index: 10;
        }

        .hover-preview-box.visible {
            opacity: 1;
            transform: translate(-50%, -50%) rotate(3deg) scale(1);
        }

        
        .egresados-hero-header {
            width: 100%;
            height: 350px; 
            background-color: #021A54; 
            position: relative;
        }

        .hero-bg-image {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-size: cover;
            background-position: center 30%; 
            background-repeat: no-repeat;
            filter: blur(8px) brightness(0.65); 
            transform: scale(1.05); 
            z-index: -2;
        }

        .hero-overlay-tint {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(2, 26, 84, 0.2);
            z-index: -1;
        }

        .hero-main-title {
            font-size: 2.8rem;
            font-weight: 800 !important;
            text-shadow: 0px 2px 5px rgba(0,0,0,0.7); 
        }

        .hero-sub-text {
            font-size: 1.1rem;
            max-width: 700px;
            font-weight: 400;
            line-height: 1.6;
            text-shadow: 0px 1px 3px rgba(0,0,0,0.8);
            color: rgba(255, 255, 255, 0.85); 
        }

        /* KEYFRAMEA */
        .reveal-block {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .reveal-block.active {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-entrance {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUpFade 1s ease-out 0.2s forwards;
        }
    
        @keyframes slideUpFade {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes uadyRotateRing {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>

</head>

<body>

        {{-- HEADER --}}
        <x-header :apartados="$apartados" />

        {{-- ENCABEZADO DE PÁGINA--}}
        <div class="page-header py-3 mb-4">
            <div class="container">
                <h2 class="text-center fw-bold text-uady-blue">
                    @yield('page-title')
                </h2>
                {{-- SUBTÍTULO --}}
                <p class="text-center small mb-0">
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