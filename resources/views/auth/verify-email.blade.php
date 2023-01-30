@extends('layouts.head')

@section('title')Подтвердите email@endsection

@section('content')
    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Подтвердите email</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                    <div class="h-2 bg-violet-400 rounded-t-md"></div>
                    <div class="px-8 py-6">
                        <p class="block font-semibold">Ссылка для подтверждения была отправлена на ваш email.</p>
                        <a href="{{ route('verification.send') }}" class="block">Для повторной отправки письма, нажмите сюда.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
