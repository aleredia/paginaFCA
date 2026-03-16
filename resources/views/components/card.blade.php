@props(['title', 'image', 'date', 'description' => null, 'time' => null])

<div class="card h-100 border-0 rounded-0 text-white bg-uady-blue">
    
    <div class="card-header border-0 bg-transparent py-3">
        <h5 class="card-title fs-6 text-uppercase mb-0" style="min-height: 2.5rem;">
            {{ $title }}
        </h5>
    </div>
    
    <img 
        src="{{ $image }}" 
        class="card-img-top rounded-0 object-fit-cover" 
        style="border-top: 3px solid #c99700; height: 220px;" 
        alt="{{ $title }}"
    >
    
    <div class="card-body d-flex flex-column">

        <p class="mb-2 fs-6">
            <span class="fw-bold">Fecha:</span> 
            <span class="text-uady-gold">{{ $date }}</span>
        </p>
        
        {{-- SOLO SI EXISTE EN LA YABLA --}}
        @if($description)
            <p class="card-text mb-4">
                {{ $description }}
            </p>
        @endif

        {{-- SOLO SI EXISTE EN LA TABLA --}}
        @if($time)
            <p class="card-text mb-4">
                <span class="fw-bold">Hora:</span> 
                <span class="text-uady-gold">{{ $time }}</span>
            </p>
        @endif
        
        <div class="mt-auto text-end">
            <x-button href="#" text="Ver más..." color="text-white">
                {{-- Sin icono --}}
            </x-button>
        </div>

    
        
    </div>

</div>