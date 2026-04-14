{{-- HEADER --}}
<header class="header">
    <div class="container-fluid px-4 py-2">
        <div class="d-flex align-items-center justify-content-between">
            {{-- LOGO --}}
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('img/escudo.png') }}" class="logo">
                <div class="brand-text">
                    <strong>FCA UADY</strong>
                    <span>Luz, Ciencia y Verdad</span>
                </div>
            </div>

            {{-- MENU AZUL --}}
            <nav class="d-none d-lg-flex nav-main gap-2">
                @foreach($apartados->slice(5,5) as $apartado)
                    <a href="{{ $apartado->ruta ? route($apartado->ruta) : '#' }}" class="nav-link">
                        {{ $apartado->nombre }}
                    </a>
                @endforeach
            </nav>

            {{-- BARRA BUSQUEDA Y ENLACES --}}
            <div class="d-flex align-items-center gap-3">
                {{-- SEARCH --}}
                <div class="search-box d-none d-md-block">
                    <x-search-bar>Buscar...</x-search-bar>
                </div>

                {{-- ENLACES --}}
                <div class="d-none d-lg-flex gap-2">
                    @foreach($apartados->slice(0,3) as $apartado)
                        <a href="#" class="quick-link">
                            {{ $apartado->nombre }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- SEGUNDO NIVEL (SUBMENU)--}}
    <div class="border-top py-2 bg-light">
        <div class="container d-flex justify-content-center gap-4 flex-wrap">
            @foreach($apartados->slice(10,5) as $apartado)
                <a href="#" class="text-decoration-none text-secondary small">
                    {{ $apartado->nombre }}
                </a>
            @endforeach
        </div>
    </div>
</header>
{{-- FIN HEADER --}}