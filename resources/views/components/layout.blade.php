<!DOCTYPE html>
<html lang="en">
<head>
    <title>Improved Layout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" onclick="this.parentElement.parentElement.remove()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.828 8.586 5.652 11.762a1 1 0 001.414 1.414L10 10.414l2.934 2.934a1 1 0 001.414-1.414L11.172 8.586l2.934-2.934z"/></svg>
            </span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            {{ session('error') }}
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" onclick="this.parentElement.parentElement.remove()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.828 8.586 5.652 11.762a1 1 0 001.414 1.414L10 10.414l2.934 2.934a1 1 0 001.414-1.414L11.172 8.586l2.934-2.934z"/></svg>
            </span>
        </div>
    @endif

    <header class="bg-indigo-700 text-white shadow-lg">
        <nav class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-3xl font-extrabold tracking-wide">Hello World</h1>
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('ninjas.index') }}" class="text-lg font-medium hover:text-indigo-300 transition">All Ninjas</a>
                <a href="{{ route('ninjas.add') }}" class="text-lg font-medium hover:text-indigo-300 transition">Add a Ninja</a>
            </div>
            <div>
                @auth
                    {{--  Display the logged-in user's name  --}}
                    <span class="text-lg font-medium text-indigo-200 mr-4">Hello, {{ Auth::user()->name }}</span>

                    {{--  Logout button  --}}
                    <a href="{{ route('auth.logout') }}" class="text-lg font-medium text-indigo-200 hover:text-indigo-400 transition"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('show.login') }}" class="text-lg font-medium text-indigo-200 hover:text-indigo-400 transition">Login</a>
                    <a href="{{ route('show.register') }}" class="ml-4 text-lg font-medium text-indigo-200 hover:text-indigo-400 transition">Register</a>
                @endauth
            </div>
        </nav>

        <!-- Mobile Navigation -->
        <div class="md:hidden flex justify-center space-x-4 bg-indigo-600 py-2">
            <a href="{{ route('ninjas.index') }}" class="text-white text-lg hover:text-indigo-300">All Ninjas</a>
            <a href="{{ route('ninjas.add') }}" class="text-white text-lg hover:text-indigo-300">Add a Ninja</a>
        </div>
    </header>

    <main class="container mx-auto p-6 md:py-8">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto flex justify-between items-center px-6">
            <p class="text-sm">© 2025 Hello World, All Rights Reserved</p>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Contact</a>
            </div>
        </div>
    </footer>
</body>
</html>
