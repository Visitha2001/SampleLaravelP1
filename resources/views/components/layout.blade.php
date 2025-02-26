<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="bg-indigo-600 text-white">
            <nav class="container mx-auto flex justify-between items-center p-4">
                <h2 class="text-2xl font-bold">Hello World</h2>
                <div class="space-x-4">
                    <a href="{{ route('ninjas.index') }}" class="hover:text-indigo-200">All Ninjas</a>
                    <a href="{{ route('ninjas.add') }}" class="hover:text-indigo-200">Add a Ninja</a>
                </div>
            </nav>
        </header>

        <main class="container mx-auto p-4">
            {{ $slot }}
        </main>
    </body>
</html>