<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" data-theme="light" id="themeitem">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Проект StudResume. Здесь каждый студент сможет найти работу по душе.">
    <meta name="keywords" content="studresume, студент, работа, резюме, вакансии, днр, россия">
    <link rel="icon" type="image/jpg" href="{{ asset('img/site-icon.jpg') }}">
    <title>@yield('title')</title>
    <!-- Fonts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-black dark:bg-slate-800 dark:text-white transition-all duration-300">
    @yield('content')

</body>
</html>
