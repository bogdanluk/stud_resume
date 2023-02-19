@extends('layouts.head')

@section('title')Вход @endsection

@section('content')
    <div class="relative flex min-h-screen antialiased flex-col justify-center dark:bg-slate-800">
        <div class="relative sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light">Вход в аккаунт</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <div class="px-5 py-3 bg-base-200 dark:bg-slate-700">
                    <p class="font-medium text-center mb-3">Используя соцсети</p>
                    <div class="flex justify-around items-baseline mb-3">
                        <a href="{{ route('login.google-redirect') }}"><i class="fa-brands fa-google text-yellow-400 text-5xl"></i></a>
                        <a href="{{ route('login.vk-redirect') }}"><i class="fa-brands fa-vk text-yellow-400 text-5xl"></i></a>
                        <a href="{{ route('login.yandex-redirect') }}"><i class="fa-brands fa-yandex text-yellow-400 text-5xl"></i></a>
                    </div>
                    <div class="h-2 bg-violet-400 rounded mb-3"></div>
                    <form action="{{ route('send_login_form') }}" method="post">
                        @csrf
                        <label class="block font-semibold" for="input1">Email</label>
                        <input type="text" id="input1" name="email" placeholder="Email"
                               class="dark:bg-slate-800 w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md">
                        <label class="block mt-3 font-semibold" for="input2">Пароль </label>
                        <input type="password" id="input2" name="password" placeholder="Пароль"
                               class="dark:bg-slate-800 border-2 dark:border-slate-400 w-full h-5 px-3 py-5 mt-2 outline-none focus:border-violet-400 rounded-md">
                        @if(session('message'))
                            <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-800 rounded-md">
                                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 dark:bg-slate-800 dark:text-red-400 rounded-md">
                                <span class="font-medium">Ошибка:</span>
                                <ul class="mt-1.5 ml-1 list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li class="ml-3 text-sm font-medium">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="flex justify-between items-baseline">
                            <button type="submit"
                                    class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Вход
                            </button>
                            <a href="{{ route('password.request') }}"
                               class="text-sm hover:underline hover:text-violet-400 dark:text-slate-400">Забыли пароль?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

