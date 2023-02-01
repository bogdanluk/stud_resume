@extends('layouts.head')

@section('title')404 @endsection

@section('content')
    <div class="grid h-screen px-4 bg-white place-content-center">
        <div class="text-center">
            <h1 class="font-black text-violet-400 text-9xl">404</h1>
            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Извините!
            </p>
            <p class="mt-4 text-gray-500">Такой страницы не существует.</p>
            <a href="{{ route('home') }}" class="inline-block px-5 py-3 mt-6 text-sm text-d font-medium text-black bg-yellow-400 rounded hover:bg-yellow-600 focus:outline-none focus:ring">
                На главную
            </a>
        </div>
    </div>

@endsection
