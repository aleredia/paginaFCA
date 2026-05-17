@props([
    'image',   
    'name',    
    'badge',  
    'col' => 'col-md-4 col-12' 
])

<div class="{{ $col }}">
    <div class="card h-100 border-0 shadow-sm rounded-4 profile-honor-card p-4 text-center bg-white">
        <div class="position-relative d-inline-block mx-auto mb-3">
            <div class="avatar-ring"></div>
            <img src="{{ asset($image) }}" alt="{{ $name }}" class="rounded-circle profile-honor-img" style="width: 110px; height: 110px; object-fit: cover;">
        </div>
        
        <h6 class="fw-bold text-uady-blue mb-1 text-uppercase">{{ $name }}</h6>
        <span class="badge bg-uady-gold-badge mb-3">{{ $badge }}</span>
        
        <p class="small text-muted mb-0">
            {{ $slot }}
        </p>
    </div>
</div>