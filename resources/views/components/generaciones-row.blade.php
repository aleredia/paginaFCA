@props([
    'image',      
    'subtitle',   
    'title'    
])

<div class="calarts-row py-4 d-flex align-items-center justify-content-between" data-image="{{ asset($image) }}">
    <div>
        <span class="text-muted small d-block">{{ $subtitle }}</span>
        <h3 class="fw-bold text-uady-blue m-0">{{ $title }}</h3>
    </div>
    <div class="pe-3">
        <span class="badge rounded-circle border border-secondary p-2">
            <i class="bi bi-arrow-up-right text-uady-blue"></i>
        </span>
    </div>
</div>