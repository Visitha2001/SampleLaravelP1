<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheets">
    </head>
    <body>
        <header>
            <nav>
                <h2>hello world</h2>
                <a href="/admin">Admin</a>
                <a href="/user/create">Add a new user</a>
            </nav>
        </header>

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
