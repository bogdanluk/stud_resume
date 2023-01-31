@extends('layouts.head')

@section('title')Сброс пароля@endsection

@section('content')

    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Сброс пароля</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 " action="{{ route('password.update') }}" method="post">
                    @csrf
                    <label class="block font-semibold" for="input1">Введите email</label>
                    <input type="text" id="input1" name="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block font-semibold" for="input2">Введите новый пароль</label>
                    <input type="password" id="input2" name="password" placeholder="Новый пароль" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block font-semibold" for="input3">Повторите пароль</label>
                    <input type="password" id="input3" name="password_confirmation" placeholder="Повторите пароль" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

