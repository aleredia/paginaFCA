<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - @yield('title', 'Página')</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* CARDS DE LAS VISTAS */
        .main-card {
            background: white;
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

        
    </style>
</head>

<body>

    {{-- HEADER --}}
    <x-header :apartados="$apartados" />

    {{-- ENCABEZADO DE PÁGINA--}}
    <div class="page-header py-3 mb-4">
        <div class="container">
            <h2 class="fw-bold text-uady-blue mb-1">
                @yield('page-title')
            </h2>
            {{-- SUBTÍTULO --}}
            <p class="text-muted small mb-0">
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