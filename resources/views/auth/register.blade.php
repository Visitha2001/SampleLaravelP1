<x-layout>
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" onclick="this.parentElement.parentElement.remove()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.828 8.586 5.652 11.762a1 1 0 001.414 1.414L10 10.414l2.934 2.934a1 1 0 001.414-1.414L11.172 8.586l2.934-2.934z"/></svg>
            </span>
        </div>
    @endif
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
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">Login</a>
            </p>
        </div>
    </div>
</x-layout>
