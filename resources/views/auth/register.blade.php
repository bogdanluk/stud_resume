@extends('layouts.head')

@section('title')Регистрация@endsection

@section('content')

    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Регистрация</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6" action="{{ route('send_register_form') }}" method="post">
                    @csrf
                    <label class="block font-semibold" for="input1">Email</label>
                    <input type="text" id="input1" name="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block mt-3 font-semibold" for="input2">Ваше ФИО</label>
                    <input type="text" id="input2" name="name" placeholder="Введите ФИО" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block mt-3 font-semibold" for="input3">Пароль</label>
                    <input type="password" id="input3" name="password" placeholder="Пароль" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block mt-3 font-semibold" for="input4">Подтвердите пароль</label>
                    <input type="password" id="input4" name="password_confirmation" placeholder="Подтвердите пароль" class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    @if($errors->any())
                        <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 rounded-md">
                            <span class="font-medium">Ошибка:</span>
                            <ul class="mt-1.5 ml-1 list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li class="ml-3 text-sm font-medium">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
                        <a href="{{ route('login') }}" class="text-sm hover:underline hover:text-violet-400">Есть аккаунт?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

