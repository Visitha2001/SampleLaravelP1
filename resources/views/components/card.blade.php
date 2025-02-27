@props(['highlight' => false])

<div @class(['highlight' => $highlight , 'card p-4 bg-white shadow-md rounded-lg mb-4'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
        View details
    </a>
</div>
