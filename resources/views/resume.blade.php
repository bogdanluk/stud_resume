@extends('layouts.head')

@section('title') {{$resume->name}} @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <img class="flex max-h-96 mx-auto mt-10" src="/storage/{{ $resume->user->avatar }}" alt="user avatar"/>
    </div>
    <div class="flex flex-col items-center w-full">
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center p-5 m-10">{{$resume->name}}</h1>
        </div>
        <div class="flex flex-col justify-between w-11/12 mb-5">
            <span class="badge font-medium bg-yellow-400 text-black rounded-full p-5">{{$resume->category->name}}</span>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <h2 class="pt-3 pl-5 font-medium">Возраст</h2>
                <p class="pt-3 pl-5">
                    {{$resume->age}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Уровень образования</h2>
                <p class="pt-3 pl-5">
                    {{$resume->education->name}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Город</h2>
                <p class="pt-3 pl-5">
                    {{$resume->city->name}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Про себя</h2>
                <p class="pt-3 pl-5 mb-3">
                    {{$resume->about}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Опыт работы</h2>
                <p class="pt-3 pl-5 mb-3">
                    {{$resume->experience}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Контактный email</h2>
                <p class="pt-3 pl-5 mb-3">
                    {{$resume->user->email}}
                </p>
            </div>

    @include('layouts.footer')
@endsection
