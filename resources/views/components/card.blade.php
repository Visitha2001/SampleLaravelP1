@props(['highlight' => false])

<div @class(['highlight' => $highlight , 'card p-4 bg-white shadow-md rounded-lg mb-4'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">
        View details
    </a>
</div>
