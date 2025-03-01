<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-900">Register</h2>
            <form class="mt-8 space-y-6" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Full Name">
                    </div>
                    <div class="mt-4">
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Email address">
                    </div>
                    <div class="mt-4">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Password">
                    </div>
                    <div class="mt-4">
                        <label for="confirm-password" class="sr-only">Confirm Password</label>
                        <input id="confirm-password" name="password_confirmation" type="password" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Confirm Password">
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-500">Register</button>
                </div>
            </form>
            <p class="mt-2 text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('show.login') }}" class="font-medium text-blue-600 hover:text-blue-500">Login</a>
            </p>
        </div>
    </div>
</x-layout>
