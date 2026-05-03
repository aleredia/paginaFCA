<div class="banner-container mb-4">
    <img src="{{ asset($imagen) }}" alt="Banner" class="banner-img">

    @if($texto)
        <div class="banner-overlay">
            <h4 class="fw-bold">{{ $texto }}</h4>
        </div>
    @endif
</div>