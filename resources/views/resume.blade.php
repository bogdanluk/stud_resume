@extends('layouts.head')

@section('title'){{$resume->name}}
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <img class="flex max-h-96 mx-auto mt-10 rounded-lg" src="/storage/{{ $resume->avatar }}" alt="resume avatar"/>
    </div>
    <div class="flex flex-col items-center w-full min-h-screen">
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center p-5 m-10 border-2 text-violet-400 border-violet-400 rounded-lg">{{$resume->name}}</h1>
        </div>
        <div class="flex flex-col justify-between w-11/12 mb-5">
            <span class="badge font-medium bg-yellow-400 text-black rounded-full p-5 border-0">{{$resume->category->name}}</span>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-base-200 px-2 sm:px-5 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <h2 class="pt-3 font-medium">Возраст</h2>
                <p class="pt-3 mb-3">
                    {{$resume->age}}
                </p>
                <h2 class="pt-3 font-medium">Уровень образования</h2>
                <p class="pt-3 mb-3">
                    {{$resume->education->name}}
                </p>
                <h2 class="pt-3 font-medium">Город</h2>
                <p class="pt-3 mb-3">
                    {{$resume->city->name}}
                </p>
                <h2 class="pt-3 font-medium">О себе</h2>
                <pre class="pt-3 mb-3 font-sans whitespace-pre-wrap">{{$resume->about}}</pre>
                <h2 class="pt-3 font-medium">Опыт работы</h2>
                <pre class="pt-3 mb-3 font-sans whitespace-pre-wrap">{{$resume->experience}}</pre>
                <h2 class="pt-3 font-medium">Email</h2>
                <p class="pt-3">
                    {{$resume->user->email}}
                </p>
                <p class="m-3 text-end text-gray-400">Дата создания: {{$resume->created_at}}</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
