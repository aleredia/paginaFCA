
<div class="position-relative w-100 bg-secondary" style="height: 500px;">
    
    <img src="{{ asset('img/fca.png') }}" alt="Banner de la facultad" class="w-100 h-100 object-fit-cover">
    
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center p-4 p-md-5">
        <h1 class="display-5 fw-bold text-uady-blue p-4 rounded">
            {{ $slot }}
        </h1>
    </div>
    
</div>