<x-layout>
    <div class="container bg-gray-200 p-10">
        {{--  if directive  --}}
        @if ( $greeting == 'hello' )
            <h1>from blade directive.</h1>
        @endif

        <h2>admin dash</h2>

        <p>{{ $greeting }}</p>
        <ul class="list-disc p-10 border border-gray-400">
            <li class="p-2 ml-4">
                <a href="/admin/{{  $users[0]['id'] }}">
                    {{ $users[0]['name'] }}</a>
            </li>
            <li class="p-2 ml-4">
                <a href="/admin/{{  $users[1]['id'] }}">
                    {{ $users[1]['name'] }}</a>
            </li>
            <li class="p-2 ml-4">
                <a href="/admin/{{  $users[2]['id'] }}">
                    {{ $users[2]['name'] }}</a>
            </li>
        </ul>

        {{--  for each directive  --}}
        <h2>form a loop with cards</h2>
        <ul>
            @foreach ( $users as $user )
                <li>
                    <x-card href="/admin/{{ $user['id'] }}"  :highlight="$user['skill'] > 70">
                        <h3>{{ $user['name'] }}</h3>
                    </x-card>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
