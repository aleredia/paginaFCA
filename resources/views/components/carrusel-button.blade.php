@props(['target', 'direction'])

@php
    $isPrev = $direction === 'prev';
    $icon = $isPrev ? 'bi-arrow-left-circle-fill' : 'bi-arrow-right-circle-fill';
    $position = $isPrev ? 'left: 15px;' : 'right: 15px;';
    $slide = $isPrev ? 'prev' : 'next';
@endphp

<button class="carousel-control-{{ $direction }} opacity-100"
        type="button"
        data-bs-target="#{{ $target }}"
        data-bs-slide="{{ $slide }}"
        
        style="
            width: 60px;
            {{ $position }}
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1050;
            border: none;
            background: none;
            pointer-events: auto;
        ">

  <i class="bi {{ $icon }} text-uady-blue"
       style="
            font-size: 3.5rem;
            filter: drop-shadow(0px 4px 6px rgba(0,0,0,0.2));
            transition: 0.3s;
       ">
    </i>

    <span class="visually-hidden">
        {{ $isPrev ? 'Anterior' : 'Siguiente' }}
    </span>
</button>

<style>
    .carousel-control-{{ $direction }}:hover i {
        color: #c99700 !important;
        transform: scale(1.1);
    }
</style>