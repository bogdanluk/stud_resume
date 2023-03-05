@extends('layouts.head')

@section('title')Сброс пароля
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="relative flex min-h-screen antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Сброс пароля</span>
            <div class="mt-4 shadow-lg rounded-lg text-left">
                <div class="h-2 bg-violet-400 rounded-t-md"></div>
                <form class="px-8 py-6 bg-base-200 dark:bg-slate-700" action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}" placeholder="Email">
                    <label class="block font-semibold" for="input1">Введите новый пароль</label>
                    <input type="password" id="input1" name="password" placeholder="Новый пароль"
                           class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
                    <label class="block font-semibold mt-2" for="input2">Повторите пароль</label>
                    <input type="password" id="input2" name="password_confirmation" placeholder="Повторите пароль"
                           class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
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
                        <button type="submit" class="btn btn-primary mt-4 border-0">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

