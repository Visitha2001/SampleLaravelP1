<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')
    </head>
    <body>
        <header>
            <nav>
                <h2>hello world</h2>
                <a href="{{ route('ninjas.index') }}">All Ninjas</a>
                <a href="{{ route('ninjas.create') }}">Add a Ninja</a>
            </nav>
        </header>

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
