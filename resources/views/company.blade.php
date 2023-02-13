@extends('layouts.head')

@section('title') {{$company->name}} @endsection

@section('content')
    @include('layouts.navbar')

    <div class="flex flex-col items-center w-full">
        <img class="flex max-h-96 mx-auto mt-10" src="/storage/{{ $company->image }}" alt="{{ $company->image}}"/>
        <h1 class="text-2xl text-center bg-base-200 p-5 m-10 rounded-lg shadow-lg dark:bg-slate-700">{{$company->name}}</h1>
    </div>

    <div class="flex flex-col items-center">
        <div class="flex flex-col items-center flex-wrap mx-5 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <h2 class="font-medium mt-3">Контактные данные</h2>
            <div class="flex flex-row justify-center flex-wrap text-center">
                <div class="flex flex-col mx-5">
                    <span class="bg-yellow-400 rounded-full font-medium py-1 px-5 mt-5">Email</span></p>
                    <a class="mt-2 mb-5 hover:text-violet-400" href="mailto:{{$company->email}}">{{$company->email}}</a>
                </div>
                <div class="flex flex-col mx-5">
                    <span class="bg-yellow-400 rounded-full font-medium py-1 px-5 mt-5">Телефон</span></p>
                    <p class="mt-2 mb-5">{{$company->phone}}</p>
                </div>
                <div class="flex flex-col mx-5">
                    <span class="bg-yellow-400 rounded-full font-medium py-1 px-5 mt-5">Сайт</span></p>
                    <a class="mt-2 mb-5 hover:text-violet-400" href="{{$company->link}}">Перейти на сайт</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col flex-wrap w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg dark:bg-slate-700">
            <h2 class="font-medium ml-5 my-3">Деятельность</h2>
            <div class="flex flex-col">
                <p class="px-5 font-sans whitespace-pre-wrap break-normal">{{$company->activity}}</p>
            </div>

            <h2 class="font-medium ml-5 my-3">Описание</h2>
            <div class="flex flex-col">
                <pre class="px-5 pb-3 font-sans whitespace-pre-wrap break-normal">{{$company->description}}</pre>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
