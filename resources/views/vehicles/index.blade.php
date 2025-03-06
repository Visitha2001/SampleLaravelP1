<x-layout>
    <div class="container bg-gray-200 p-10">
        <h2 class="font-sans text-3xl font-bold text-white bg-fuchsia-500 p-4 rounded-md mb-6">Vehicles Dash</h2>

        <h2 class="text-2xl mb-4">All Vehicles</h2>

        {{--  for each directive  --}}
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($vehicles as $vehicle)
                <li>
                    <x-card href="{{ route('vehicles.show', $vehicle->id) }}" class="p-4 bg-white shadow-lg rounded-lg">
                        <h3 class="text-xl font-semibold mb-2">{{ $vehicle->make }} + {{ $vehicle->year }}</h3>
                        <p class="text-gray-600 mb-2">Model: {{ $vehicle->model }}</p>
                        <p class="text-gray-600 mb-4">Owned dojo: {{ $vehicle->dojo->name }}</p>
                    </x-card>
                </li>
            @endforeach
        </ul>

        {{-- Paginate the results --}}
        <div class="mt-8">
            {{ $vehicles->links('pagination::tailwind') }}
        </div>
    </div>
</x-layout>
