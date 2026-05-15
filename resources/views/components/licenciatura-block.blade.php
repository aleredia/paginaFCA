{{-- resources/views/components/licenciatura-block.blade.php --}}
@props([
    'image', 
    'title', 
    'description', 
    'link' => '#', 
    'reverse' => false
])

<div class="row g-0 align-items-stretch mb-5 reveal-block shadow-sm rounded-4 overflow-hidden {{ $reverse ? 'flex-md-row-reverse' : '' }}">
    <div class="col-md-6">
        <div class="h-100 zoom-box">
            <img src="{{ asset($image) }}" class="img-fluid w-100 h-100" alt="{{ $title }}" style="object-fit: cover;">
        </div>
    </div>
    

    <div class="col-md-6 bg-uady-gold-soft d-flex flex-column justify-content-center p-4 p-lg-5 {{ $reverse ? 'text-md-end' : '' }}">
        <h3 class="fw-bold text-uady-blue mb-3">{{ $title }}</h3>
        <p class="text-muted lead mb-4" style="text-align: justify;">
            {{ $description }}
        </p>
        
        
        <div class="d-flex {{ $reverse ? 'justify-content-md-end' : 'justify-content-md-start' }} justify-content-center">
            <x-button :href="$link" :text="'Conoce más sobre esta carrera'" />
        </div>
    </div>
</div>