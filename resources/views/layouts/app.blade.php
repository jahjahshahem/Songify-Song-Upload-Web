<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Song CRUD App')</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js via CDN -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-beige-50 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-beige-100 text-gray-800 px-6 py-4 flex justify-between items-center shadow-sm">
        <h1 class="text-2xl font-semibold">Songify</h1>

        <!-- Navigation -->
        <nav class="space-x-3">
            <a href="{{ route('songs.index') }}"
               class="px-3 py-1 bg-white text-gray-800 border border-gray-300 rounded hover:bg-gray-100 transition">
                Home
            </a>

            <a href="{{ route('songs.create') }}" dusk="to-create"
               class="px-3 py-1 bg-beige-200 text-gray-800 border border-gray-300 rounded hover:bg-beige-300 transition">
                Add Song
            </a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-beige-100 text-center p-4 text-gray-700">
        @yield('footer', 'Developed by Shahem B. Jahjah')
    </footer>

</body>
</html>
