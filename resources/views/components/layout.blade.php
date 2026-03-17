@props([
    'title' => 'Home'
])

<!DOCTYPE html>
<html data-theme="dracula">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="">
        <x-nav />
        <main class="max-w-3xl mx-auto mt-6">
            {{ $slot }}
        </main>
    </body>
</html>
