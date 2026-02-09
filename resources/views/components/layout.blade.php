@props([
    'title' => 'Home'
])

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
    </head>
    <body>
        <nav>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
