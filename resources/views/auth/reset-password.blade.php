@extends('layouts.head')

@section('title')Сброс пароля @endsection

@section('content')

    <div class="relative flex min-h-screen antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Сброс пароля</span>
            <div class="mt-4 dark:bg-slate-700 shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 " action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}" placeholder="Email">
                    <label class="block font-semibold" for="input1">Введите новый пароль</label>
                    <input type="password" id="input1" name="password" placeholder="Новый пароль"
                           class="dark:bg-slate-800 w-full h-5 px-3 py-5 mt-2 outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <label class="block font-semibold mt-2" for="input2">Повторите пароль</label>
                    <input type="password" id="input2" name="password_confirmation" placeholder="Повторите пароль"
                           class="dark:bg-slate-800 w-full h-5 px-3 py-5 mt-2 outline-none focus:ring-violet-400 focus:ring-1 rounded-md">
                    <input type="hidden" name="token" value="{{ $token }}">
                    @if($errors->any())
                        <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 dark:bg-slate-800 rounded-md">
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
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

