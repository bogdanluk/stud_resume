@extends('layouts.head')

@section('title')Забыли пароль @endsection

@section('content')

    <div class="relative flex min-h-screen antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Восстановление пароля</span>
            <div class="mt-4 dark:bg-slate-700 shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 bg-base-200" action="{{ route('password.email') }}" method="post">
                    @csrf
                    <label class="block font-semibold" for="input1">Введите email</label>
                    <input type="text" id="input1" name="email" placeholder="Email"
                           class="w-full h-5 px-3 py-5 mt-2 border-2 dark:border-slate-400 dark:bg-slate-800 outline-none focus:border-violet-400 rounded-md">
                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
                    </div>
                    @if(session('message'))
                        <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-800 rounded-md">
                            <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 dark:bg-slate-800 bg-red-50 rounded-md">
                            <span class="font-medium">Ошибка:</span>
                            <ul class="mt-1.5 ml-1 list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li class="ml-3 text-sm font-medium">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection

