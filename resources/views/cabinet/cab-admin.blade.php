@extends('layouts.head')

@section('title')Кабинет администратора @endsection

@section('content')
    @include('cabinet.cab-admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        @if(session('message'))
            <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 rounded-md">
                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
            </div>
        @endif
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Кабинет администратора</h1>
        <div class="flex flex-col items-center flex-wrap mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <div class="flex flex-row justify-center flex-wrap mx-10">
                <div class="flex flex-row flex-wrap justify-center items-center text-center my-5">
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Email</span>
                        <p class="mt-2 mb-5">{{auth()->user()->email}}</p>
                    </div>
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Роль</span>
                        <p class="mt-2 mb-5">{{auth()->user()->role->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
