@extends('layouts.head')

@section('title') {{$company->name}} @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <img class="flex max-h-96 mx-auto mt-10" src="/storage/news/{{ $company->image }}" alt="{{ $company->image}}"/>
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center bg-base-200 p-5 m-10 rounded-lg shadow-lg dark:bg-slate-700">{{$company->name}}</h1>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <h2 class="pt-5 pl-5 font-medium">Телефон</h2>
                <p class="pl-5 pt-3">
                    {{$company->phone}}
                </p>
                <h2 class="pt-5 pl-5 font-medium">E-mail</h2>
                <p class="pl-5 pt-3">
                    {{$company->email}}
                </p>
                <h2 class="pt-5 pl-5 font-medium">Ссылка на сайт</h2>
                <p class="pl-5 py-3">
                    {{$company->link}}
                </p>
            </div>

            <div class="flex flex-col w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg dark:bg-slate-700">
                <h2 class="pt-5 pl-5 font-medium">Деятельность</h2>
                <p class="pl-5 pt-3">{{$company->activity}}</p>
                <h2 class="pt-5 pl-5 font-medium">Описание</h2>
                <pre class="font-sans px-5 py-3 whitespace-pre-wrap break-normal">{{$company->description}}</pre>
            </div>
        </div>

    @include('layouts.footer')
@endsection
