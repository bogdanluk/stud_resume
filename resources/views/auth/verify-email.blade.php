@extends('layouts.head')

@section('title')Подтвердите email
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="relative flex min-h-screen antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light">Подтвердите email</span>
            <div class="mt-4 shadow-lg text-left">
                <div class="mt-4 shadow-lg text-left">
                    <div class="px-8 py-6 bg-base-200 dark:bg-slate-700 border-t-8 border-t-violet-400 rounded-lg">
                        <p class="block mb-2 text-xl font-semibold">Ссылка для подтверждения была отправлена на ваш email.</p>
                        <p class="block mb-2">Письмо может находиться в папке "спам".</p>
                        @if(session('message'))
                            <div class="flex p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-800 dark:text-green-400 rounded-md">
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
                        <form action="{{ route('verification.send') }}" method="post" class="text-center mt-4 mb-0">
                            @csrf
                            <button type="submit" class="btn btn-primary border-0">Отправить повторно</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
