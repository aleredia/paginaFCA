<div class="position-relative w-100 bg-secondary" style="height: 550px;">
    
    <img src="{{ asset($imagen ?? 'img/fondoo.jpg') }}" alt="Banner de la facultad" class="w-100 h-100 object-fit-cover">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
    
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center p-4 p-md-5">
        <h1 class="display-5 fw-bold text-white p-4 rounded text-center">
            {{ $slot }}
        </h1>
    </div>
    
</div>