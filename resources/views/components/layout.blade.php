@props([
    'title' => 'Home'
])

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-600 p-6 max-w-xl mx-auto">
        <nav>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
            <a href="/ideas">Ideas</a>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
