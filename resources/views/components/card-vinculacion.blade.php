@props([
    'image',          
    'text',           
    'buttonText',     
    'buttonHref',     
    'bgPosition' => '0px center' 
])

<div class="container-fluid px-lg-5 overflow-hidden mb-5">
    
    <div class="row g-0 animate-entrance shadow-sm rounded-4 overflow-hidden position-relative hero-spaces-container" style="height: 550px;">
       
        <div class="hero-spaces-bg" style="background-image: url('{{ asset($image) }}'); background-position: {{ $bgPosition }};"></div>
        <div class="hero-spaces-overlay"></div>
        <div class="position-absolute bottom-0 start-0 p-4 p-md-5 hero-spaces-content text-md-start text-center">
            <p class="mb-0 small-lead">
                {{ $text }}
            </p>
        </div>

        <div class="position-absolute bottom-0 end-0 p-4 p-md-5 d-flex justify-content-md-end justify-content-center hero-btn-container">
            <x-button :href="$buttonHref" :text="$buttonText" />
        </div>

    </div>
</div>