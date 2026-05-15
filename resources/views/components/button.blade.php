
@props(['href' => '#', 'text'])

<a href="{{ $href }}" class="btn-uady-custom">
    <span>{{ $text }}</span>
    @if($slot->isNotEmpty())
        <span class="ms-2">{{ $slot }}</span>
    @endif
</a>

<style>
    .btn-uady-custom {
        background-color: #021A54;
        color: white !important;
        padding: 12px 28px;
        border-radius: 50px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        width: fit-content;
    }

    .btn-uady-custom:hover {
        background-color: #c99700;
        color: white !important;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .btn-uady-custom:active {
        transform: translateY(-1px);
    }
</style>