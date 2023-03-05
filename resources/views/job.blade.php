@extends('layouts.head')

@section('title') {{$job->name}} @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full min-h-screen">
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center p-5 m-10 border-2 text-violet-400 border-violet-400 rounded-lg">{{$job->name}}</h1>
        </div>
        <div class="flex flex-col justify-between w-11/12 mb-5">
            <span class="badge font-medium bg-yellow-400 text-black rounded-full p-5 border-0">{{$job->category->name}}</span>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-base-200 px-2 sm:px-5 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <h2 class="pt-3 font-medium">Оплата</h2>
                <p class="pt-3">{{$job->salary}}</p>
                <h2 class="pt-3 font-medium">Описание</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->description}}</pre>
                <h2 class="pt-3font-medium">Требования</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->requirements}}</pre>
                <h2 class="pt-3 font-medium">Обязанности</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->responsibilities}}</pre>
                <h2 class="pt-3 font-medium">Условия работы</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->work_conditions}}</pre>
                <h2 class="pt-3 font-medium">Город</h2>
                <p class="pt-3">{{$job->city->name}}</p>
                <h2 class="pt-3 font-medium">Компания</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->company_name}}</pre>
                <h2 class="pt-3 font-medium">Контакты</h2>
                <pre class="py-3 font-sans whitespace-pre-wrap">{{$job->contacts}}</pre>
                <h2 class="pt-3 font-medium">Тип трудоустройства</h2>
                <p class="pt-3">{{$job->jobType->name}}</p>
                <p class="m-3 text-end text-gray-400">Дата создания: {{$job->created_at}}</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
