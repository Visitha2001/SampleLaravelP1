<x-layout>
    <div class="container bg-gray-200 p-10">
        <h2 class="font-sans size-28 bg-fuchsia-500">Ninja dash</h2>

        <ul class="list-disc p-10 border border-gray-400">
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
        </ul>

        {{--  for each directive  --}}
        <h2>form a loop with cards</h2>
        <ul>
            @foreach ( $ninjas as $ninja )
                <li>
                    <x-card href="{{ route('ninjas.show' , $ninja->id) }}"  :highlight="$ninja['skill'] > 50">
                        <h3>{{ $ninja->name }}</h3>
                    </x-card>
                </li>
            @endforeach
        </ul>

        {{--  paginate the results of ninjas  --}}
        {{ $ninjas->links() }}
    </div>
</x-layout>
