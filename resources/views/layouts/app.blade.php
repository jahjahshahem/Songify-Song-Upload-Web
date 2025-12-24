<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Songify')</title>
</head>
<body>

    <header>
        <h1>Song CRUD Application</h1>
        <nav>
            <a href="{{ route('songs.index') }}">Home</a> |
            <a href="{{ route('songs.create') }}">Add Song</a>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>


    <footer>
        @yield('footer', 'Developed by Shahem B. Jahjah')
    </footer>
</body>
</html>
