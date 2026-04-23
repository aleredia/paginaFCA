<div class="position-relative w-100" style="height: 550px;">
    
    <div class="w-100 h-100 p-3 p-md-4 p-lg-5">
        <img src="{{ asset($imagen ?? 'img/fondoo.jpg') }}" class="w-100 h-100 object-fit-cover rounded-3">
    </div>
    
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center p-4 p-md-5">
        <h1 class="display-5 fw-bold text-white p-4 rounded text-center">
            {{ $slot }}
        </h1>
    </div>
    
</div>