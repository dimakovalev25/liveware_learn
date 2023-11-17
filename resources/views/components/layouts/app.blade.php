<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="mx-20">
    <div class="flex bg-pink-300 font-bold p-4 rounded shadow">
        <a href="/"> Hello Liveware!</a>
        <a class="ml-6" href="/counter">Counter</a>
        <a class="ml-6" href="/calculator">Calculator</a>
        <a class="ml-6" href="/todolist">Todolist</a>

    </div>
    <div class="mt-6">
        {{ $slot }}
    </div>

    </body>
</html>
