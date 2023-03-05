@extends('layouts.head')

@section('title')404
@endsection

@section('content')
    <div class="grid h-screen px-4 bg-white place-content-center dark:bg-slate-800">
        <div class="text-center">
            <h1 class="font-black text-violet-400 text-9xl">404</h1>
            <p class="text-2xl font-bold tracking-tight text-black sm:text-4xl dark:text-white">
                Такой страницы не существует.
            </p>
            <a href="{{ route('home') }}" class="inline-block px-5 py-3 mt-6 text-sm text-d font-medium text-black bg-yellow-400 rounded hover:bg-yellow-600 outline-none focus:ring focus:ring-yellow-400">
                На главную
            </a>
        </div>
    </div>

@endsection
