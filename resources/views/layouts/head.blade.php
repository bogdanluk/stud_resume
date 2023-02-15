<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" id="themeitem">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Fonts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-black dark:bg-slate-800 dark:text-white transition-all duration-300">
    @yield('content')

</body>
</html>
