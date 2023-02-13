@extends('layouts.head')

@section('title') {{$job->name}} @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center p-5 m-10">{{$job->name}}</h1>
        </div>
        <div class="flex flex-col justify-between w-11/12 mb-5">
            <span class="badge font-medium bg-yellow-400 text-black rounded-full p-5">{{$job->category->name}}</span>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <h2 class="pt-3 pl-5 font-medium">Оплата</h2>
                <p class="pt-3 pl-5">{{$job->salary}}</p>
                <h2 class="pt-3 pl-5 font-medium">Описание</h2>
                <pre class="py-3 pl-5 font-sans">{{$job->description}}</pre>
                <h2 class="pt-3 pl-5 font-medium">Город</h2>
                <p class="pt-3 pl-5">{{$job->city->name}}</p>
                <h2 class="pt-3 pl-5 font-medium">Тип трудоустройства</h2>
                <p class="pt-3 pl-5">{{$job->jobType->name}}</p>
                <p class="m-3 text-end text-gray-400">Дата создания: {{ $job->created_at}}</p>
            </div>

        </div>

    @include('layouts.footer')
@endsection
