@extends('layouts.head')

@section('title')Подтвердите email @endsection

@section('content')

    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">Подтвердите email</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                <div class="mt-4 bg-white shadow-lg rounded-lg text-left">
                    <div class="h-2 bg-violet-400 rounded-t-md"></div>
                    <div class="px-8 py-6">
                        <p class="block mb-2 text-xl font-semibold">Ссылка для подтверждения была отправлена на ваш email.</p>
                        @if(session('message'))
                            <div class="flex p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 rounded-md">
                                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
                            </div>
                        @endif
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
                        <form action="{{ route('verification.send') }}" method="post" class="text-center mt-4 mb-0">
                            @csrf
                            <button type="submit" class="text-violet-400 hover:text-white border border-violet-400 hover:bg-violet-400 focus:ring-4 focus:outline-none focus:ring-violet-400 font-light rounded-lg text-sm p-1 text-center">Отправить повторно</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
