<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="container text-center mt-20 p-8">
        <h1>First Laravel Project</h1>
        <a href="/admin" class="btn mt-4 inline-block border border-gray-500 rounded-xl p-2">Admin dash</a>
    </div>
</body>
</html>
