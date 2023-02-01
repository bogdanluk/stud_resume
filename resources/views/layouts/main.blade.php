@extends('homepage')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('title')
    <title>Главная страница</title>
@endsection
{{-- Шапка --}}
@section('header')
<header class="flex flex-col w-full items-center border-b-4 rounded-b-3xl font-sans">
    <h1 class="text-4xl my-10 font-medium">Это главная страница</h1>   
    <div class="flex w-full justify-between text-xl my-4">
        <div class="flex justify-start col-span-3 mx-4">
            <a class="mr-1 border-b-4 border-t-4 rounded-t rounded-b-xl p-2 border-t-purple-500 hover:border-t-0 hover:rounded-t-none hover:border-b-amber-400 ease-in duration-100" href="{{ route('home.index') }}">Главная</a>
            <a class="ml-1 border-b-4 border-t-4 rounded-t rounded-b-xl p-2 border-t-purple-500 hover:border-t-0 hover:rounded-t-none hover:border-b-amber-400 ease-in duration-100" href="{{ route('news.index') }}">Новости</a>
        </div>
        <div class="flex justify-center col-span-1 mx-4">
            <a class="mr-1 border-b-4 border-t-4 rounded-t rounded-b-xl p-2 border-t-purple-500 hover:border-t-0 hover:rounded-t-none hover:border-b-amber-400 ease-in duration-100" href="{{ route('register') }}">Зарегистрироваться</a>
            <a class="ml-1 border-b-4 border-t-4 rounded-t rounded-b-xl p-2 border-t-purple-500 hover:border-t-0 hover:rounded-t-none hover:border-b-amber-400 ease-in duration-100" href="{{ route('login') }}">Войти</a>
        </div>
    </div>
</header>
@endsection