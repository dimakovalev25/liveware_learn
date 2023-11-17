<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

</head>
<body class="mx-20">
<div class="flex bg-gray-300  rounded shadow">
    <a href="/"> Hello Liveware!</a>
    <a class="ml-6" href="/counter">Counter</a>
    <a class="ml-6" href="/calculator">Calculator</a>
    <a class="ml-6" href="/todolist">Todolist</a>

</div>


@livewireScripts
</body>
</html>
