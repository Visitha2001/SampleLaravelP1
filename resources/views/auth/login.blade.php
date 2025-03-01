<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-900">Login</h2>
            <form class="mt-8 space-y-6" action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Email address">
                    </div>
                    <div class="mt-4">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="remember_me" class="ml-2 text-sm text-gray-900">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-500">Login</button>
                </div>
            </form>
            <p class="mt-2 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('show.register') }}" class="font-medium text-blue-600 hover:text-blue-500">Sign up</a>
            </p>
        </div>
    </div>
</x-layout>
