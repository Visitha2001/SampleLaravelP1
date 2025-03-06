<x-layout>
    <div class="container mx-auto max-w-lg p-10 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Create Vehicle</h2>

        {{-- Create add vehicle form here --}}
        <form action="{{ route('vehicles.store') }}" class="form space-y-6" method="POST">
            @csrf
            {{-- Validate errors --}}
            @if ($errors->any())
                <div class="text-red-700 text-sm bg-red-200 p-2 mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="make" class="block text-lg font-semibold text-gray-700 mb-2">Manufacture company:</label>
                <input type="text" name="make" id="make" required
                    value="{{ old('make') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="model" class="block text-lg font-semibold text-gray-700 mb-2">Model:</label>
                <input type="text" name="model" id="model" required
                    value="{{ old('model') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="year" class="block text-lg font-semibold text-gray-700 mb-2">Year:</label>
                <input type="number" name="year" id="year" required
                    value="{{ old('year') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="color" class="block text-lg font-semibold text-gray-700 mb-2">Color:</label>
                <input type="text" name="color" id="color" required
                    value="{{ old('color') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="weight" class="block text-lg font-semibold text-gray-700 mb-2">Weight (kg):</label>
                <input type="number" name="weight" id="weight" required
                    value="{{ old('weight') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="dojo_id" class="block text-lg font-semibold text-gray-700 mb-2">Dojo:</label>
                <select name="dojo_id" id="dojo_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" disabled selected>Select a Dojo</option>
                    @foreach ($dojos as $dojo)
                        <option value="{{ $dojo->id }}">{{ $dojo->name }} --> {{ $dojo->id }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="w-full bg-indigo-500 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Add Vehicle
            </button>
        </form>
    </div>
</x-layout>
