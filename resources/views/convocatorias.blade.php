@extends('layouts.secondary')

@section('title', 'Convocatorias')
@section('page-title', 'Convocatorias')
@section('page-subtitle', 'Convocatorias')

@section('banner')
    <x-banner imagen="img/convocatorias.jpg" texto="Ciencia con Pertinencia Social" />
@endsection

@section('content')

    <div class="container">
        <div class="row g-4">
            @foreach($convocatorias as $convocatoria)
            <div class="col-lg-4 col-md-6">
                <div class="conv-card h-100">
                    <div class="conv-top">
                        <span class="conv-badge">
                            {{ $convocatoria->tipo }}
                        </span>
                    </div>
                    <div class="conv-body">
                        <h4 class="conv-name">
                            {{ $convocatoria->nombre }}
                        </h4>
                        <div class="conv-dates">
                            <div class="date-box">
                                <span class="date-label">
                                    Inicio
                                </span>
                                <span class="date-value">
                                    {{ $convocatoria->inicio }}
                                </span>
                            </div>

                            <div class="date-box">
                                <span class="date-label">
                                    Cierre
                                </span>
                                <span class="date-value">
                                    {{ $convocatoria->cierre }}
                                </span>
                            </div>
                        </div>
                            <a href="{{ $convocatoria->link }}" 
                                class="conv-btn"
                                target="_blank" 
                                rel="noopener noreferrer">
                                    Ver convocatoria
                                    <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                </div>
            </div>
            @endforeach

        </div>
    
    </section>

@endsection