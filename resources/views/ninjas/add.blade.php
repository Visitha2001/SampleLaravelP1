<x-layout>
    <div class="container mx-auto max-w-lg p-10 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Create Ninja</h2>

        {{-- Create add ninja form here --}}
        <form action="" class="form space-y-6" method="">
            @csrf
            <div class="form-group">
                <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Name:</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="skill" class="block text-lg font-semibold text-gray-700 mb-2">Skill:</label>
                <input type="text" name="skill" id="skill" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="form-group">
                <label for="bio" class="block text-lg font-semibold text-gray-700 mb-2">Biography:</label>
                <textarea name="bio" id="bio" required
                    class="w-full h-32 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <div class="form-group">
                <label for="dojo_id" class="block text-lg font-semibold text-gray-700 mb-2">Dojo:</label>
                <select name="dojo_id" id="dojo_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    {{-- Options should be populated here --}}
                    <option value="" disabled selected>Select a Dojo</option>
                    @foreach ($dojos as $dojo)
                        <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="w-full bg-indigo-500 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Add Ninja
            </button>
        </form>
    </div>
</x-layout>