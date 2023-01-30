@extends('layouts.head')

@section('title')Вход@endsection

@section('content')

    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Вход в аккаунт</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 " action="#" method="post">
                    <label class="block font-semibold" for="input1">Email</label>
                    <input type="text" id="input1" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block mt-3 font-semibold" for="input2">Пароль </label>
                    <input type="password" id="input2" placeholder="Пароль" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Вход</button>
                        <a href="#" class="text-sm hover:underline">Забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>

@endsection

