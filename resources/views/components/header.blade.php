{{-- HEADER --}}
<header class="header">
    <div class="container-fluid px-4 py-2">
        <div class="d-flex align-items-center justify-content-between">

            {{-- LOGO --}}
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('img/logo.png') }}" class="logo">

                <div class="brand-text">
                    <strong>FCA UADY</strong>
                    <span>Luz, Ciencia y Verdad</span>
                </div>
            </div>

            {{-- MENU --}}
            <nav class="d-none d-lg-flex nav-main gap-2">
                <a href="{{ route('inicio') }}" class="nav-link">
                    Inicio
                </a>

                <div class="dropdown-custom">
                    <a href="#" class="nav-link">
                        Aspirantes
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ route('aspirante') }}" class="dropdown-item-custom">
                            Proceso de inscripción
                        </a>
                        <a href="{{ route('oferta') }}" class="dropdown-item-custom">
                            Oferta Educativa
                        </a>
                    </div>
                </div>

                <a href="{{ route('estudiante') }}" class="nav-link">
                    Estudiantes
                </a>

                <a href="{{ route('docente') }}" class="nav-link">
                    Docentes
                </a>

                <div class="dropdown-custom">
                    <a href="{{ route('nuestrafacultad') }}" class="nav-link">
                        Nuestra Facultad
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ route('egresados') }}" class="dropdown-item-custom">
                            Egresados
                        </a>
                        <a href="{{ route('vinculacion') }}" class="dropdown-item-custom">
                            Vinculación
                        </a>
                    </div>
                </div>
            </nav>

            {{-- ENLACES --}}
            <div class="d-flex align-items-center gap-3">
                <div class="d-none d-lg-flex gap-2">
                    <a href="calendario" class="quick-link">
                        Calendario
                    </a>
                   {{-- <a href="#" class="quick-link">
                        Biblioteca
                    </a>--}}
                </div>
            </div>

        </div>
    </div>
</header>