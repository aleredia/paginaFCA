@props([
    'col' => 'col-md-4',    
    'height' => '400px',    
    'image',                
    'title',                
    'description',
    'titleClass' => 'h5' 
])

<div class="{{ $col }} col-12">
    <div class="space-card rounded-4 shadow-sm position-relative overflow-hidden" 
         style="background-image: url('{{ asset($image) }}'); height: {{ $height }};">
        <div class="space-overlay d-flex flex-column justify-content-end p-4 text-white">
            <div class="space-content-block">
                <span class="fw-bold text-uady-gold mb-2 d-block {{ $titleClass }}" style="text-shadow: 0px 2px 4px rgba(0,0,0,0.8);">
                    {{ $title }}
                </span>
                
                <p class="space-description mb-0">
                    {{ $description }}
                </p>
            </div>

        </div>
    </div>
</div>