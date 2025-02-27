<x-layout>
    <div class="container bg-gray-300 p-10 rounded-lg shadow-lg mb-8">
        <h1 class="text-3xl font-bold mb-4">Ninja Details</h1>
        <hr class="mb-6"/>

        <div class="text-lg">
            <h2 class="mb-2"><span class="font-semibold">User ID:</span> {{ $ninja->id }}</h2>
            <h2 class="mb-2"><span class="font-semibold">User Name:</span> {{ $ninja->name }}</h2>
            <h2 class="mb-2"><span class="font-semibold">User Skill:</span> {{ $ninja->skill }}</h2>
            <h2 class="mb-2"><span class="font-semibold">User Bio:</span> {{ $ninja->bio }}</h2>
        </div>
        {{-- Delete Form --}}
        <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST" class="mt-4 right-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 right-2 mb-4">
                Delete Ninja
            </button>
        </form>
    </div>

    <div class="container bg-gray-200 p-10 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-5">Dojo Information</h2>
        <hr class="mb-6"/>

        <div class="text-lg">
            <h3 class="mb-2"><span class="font-semibold">Dojo Name:</span> {{ $ninja->dojo->name }}</h3>
            <h3 class="mb-2"><span class="font-semibold">Dojo Location:</span> {{ $ninja->dojo->location }}</h3>
            <h3 class="mb-2"><span class="font-semibold">Dojo Description:</span> {{ $ninja->dojo->description }}</h3>
        </div>
    </div>
</x-layout>

