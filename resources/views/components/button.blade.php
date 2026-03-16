
@props(['href' => '#', 'text', 'color' => 'text-uady-blue'])

<a href="{{ $href }}" class="d-flex flex-column align-items-center text-decoration-none {{ $color }} text-center opacity-75-hover">
    <div class="mb-1">
        {{ $slot }}
    </div>
    <span style="font-size: 0.85rem;">{{ $text }}</span>
</a>