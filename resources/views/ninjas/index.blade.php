<x-layout>
    <div class="container bg-gray-200 p-10">
        <h2 class="font-sans text-3xl font-bold text-white bg-fuchsia-500 p-4 rounded-md mb-6">Ninja Dash</h2>

        <h2 class="text-2xl mb-4">Form a Loop with Cards</h2>

        {{--  <ul class="list-disc p-10 border border-gray-400">
            <li class="p-2 ml-4">
                <a href="/ninjas/{{  $ninjas[0]['id'] }}">
                    {{ $ninjas[0]['name'] }}</a>
            </li>
            <li class="p-2 ml-4">
                <a href="/ninjas/{{  $ninjas[1]['id'] }}">
                    {{ $ninjas[1]['name'] }}</a>
            </li>
            <li class="p-2 ml-4">
                <a href="/ninjas/{{  $ninjas[2]['id'] }}">
                    {{ $ninjas[2]['name'] }}</a>
            </li>
        </ul>  --}}

        {{--  for each directive  --}}
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($ninjas as $ninja)
                <li>
                    <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 50" class="p-4 bg-white shadow-lg rounded-lg">
                        <h3 class="text-xl font-semibold mb-2">{{ $ninja->name }}</h3>
                        <p class="text-gray-600 mb-4">Dojo: {{ $ninja->dojo->name }}</p>
                    </x-card>
                </li>
            @endforeach
        </ul>

        {{-- Paginate the results --}}
        <div class="mt-8">
            {{ $ninjas->links('pagination::tailwind') }}
        </div>
    </div>
</x-layout>
