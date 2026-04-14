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


        /* CONTENEDOR PRINCIPAL */
        .main-card {
            background: white;
            border-radius: 14px;
            padding: 30px;
        }

        .section-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
        }


        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .custom-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.3s;
            border: 1px solid #e5e7eb;
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
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #2563eb;
            text-decoration: none;
        }

        .btn-ver-mas:hover {
            color: #1d4ed8;
        }

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

        /* overlay opcional */
        .banner-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
            color: white;
        }

        
    </style>
</head>

<body>

    {{-- HEADER GLOBAL --}}
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
    <main class="container mb-5">
        <div class="main-card shadow-sm">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>