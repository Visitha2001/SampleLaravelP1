<x-layout>
        <div class="container bg-gray-300 p-10">
            <h1>Ninja details</h1>
            <hr/>
            <h2>User id : {{ $ninja->id }}</h2>
            <h2>User name : {{ $ninja->name }}</h2>
        </div>

        <div class="container bg-gray-200 p-10">
            <h2 class="font-sans mb-5">Dojo data - </h2>
            <hr/>
            <h3>Dojo name : {{ $ninja->dojo->name }}</h3>
            <h3>Dojo location : {{ $ninja->dojo->location }}</h3>
            <h3>Dojo description : {{ $ninja->dojo->description }}</h3>
        </div>
</x-layout>
