
@props([
    'id',  
    'year',        
    'tag',         
    'title',       
    'shortText',   
    'images' => [] 
])

<div class="timeline-card-item mb-4 rounded-4 overflow-hidden shadow-sm">
    <div class="timeline-hero-trigger p-4 p-md-5 d-flex align-items-center justify-content-between position-relative" 
         data-bs-toggle="collapse" 
         data-bs-target="#collapse{{ $id }}" 
         aria-expanded="false" 
         aria-controls="collapse{{ $id }}">
        
        <div class="timeline-slideshow">
            @foreach($images as $index => $image)
                <div class="slide-bg {{ $index === 0 ? 'active' : '' }}" 
                     style="background-image: url('{{ asset($image) }}');">
                </div>
            @endforeach
        </div>
        
        <div class="timeline-card-overlay"></div>

        
        <div class="timeline-text-content position-relative">
            <div class="d-flex align-items-center mb-2">
                <span class="badge bg-uady-gold text-dark fw-bold me-3 px-3 py-2 fs-6">{{ $year }}</span>
                <span class="text-uady-gold small fw-bold text-uppercase tracking-wider">{{ $tag }}</span>
            </div>
            <h3 class="fw-extrabold text-white my-1 display-7">{{ $title }}</h3>
            <p class="text-white-75 small m-0 d-none d-md-block">{{ $shortText }}</p>
        </div>

        
        <div class="timeline-chevron-icon-white position-relative">
            <i class="bi bi-chevron-down text-white fs-4"></i>
        </div>
    </div>

    <div id="collapse{{ $id }}" class="collapse">
        <div class="timeline-detailed-body p-4 border-top">
            {{ $slot }}
        </div>
    </div>
</div>

<script>
window.addEventListener("load", function () {
    const slideshows = document.querySelectorAll(".timeline-slideshow");

    if (slideshows.length === 0) {
        console.warn("No se encontraron contenedores .timeline-slideshow en el DOM.");
        return;
    }

    slideshows.forEach((slideshow, index) => {
        const slides = slideshow.querySelectorAll(".slide-bg");
        
        if (slides.length > 1) {
            let currentSlideIndex = 0;
            setInterval(() => {
                slides[currentSlideIndex].classList.remove("active");
                currentSlideIndex = (currentSlideIndex + 1) % slides.length;
                slides[currentSlideIndex].classList.add("active");
            }, 4000);
        }
    });
});
</script>