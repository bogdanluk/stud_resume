@extends('layouts.head')

@section('title')Забыли пароль@endsection

@section('content')

    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Восстановление пароля</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 " action="{{ route('password.email') }}" method="post">
                    <label class="block font-semibold" for="input1">Введите email</label>
                    <input type="text" id="input1" name="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

