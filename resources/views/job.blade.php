@extends('layouts.head')

@section('title') {{$post->name}} @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <div class="flex flex-col items-center w-full">
            <h1 class="text-2xl text-center p-5 m-10 border-b-4 border-b-violet-400 rounded-lg">{{$post->name}}</h1>
        </div>
        <div class="flex flex-col justify-between w-11/12 mb-10">
            <span class="text-white badge bg-violet-400 rounded-full">{{$category->name_category}}</span>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="flex flex-col w-11/12 bg-white border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10">
                <h2 class="pt-5 pl-5 font-medium">Оплата</h2>
                <p class="pl-5 pt-3">
                    {{$post->payment}}
                </p>
                <h2 class="pt-5 pl-5 font-medium">Опыт работы</h2>
                <p class="pl-5 pt-3 pb-5">
                    {{$post->experience}}
                </p>
            </div>

            <div class="flex flex-col w-11/12 bg-white border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10">
                <h2 class="pt-5 pl-5 font-medium">Компания</h2>
                <div class="flex flex-row items-center">
                    <i class="fa-brands fa-black-tie pl-5 pt-3 pb-5"></i>
                    <p class="pl-5 pt-3 pb-5">{{$post->company}}</p>
                </div>
                
            </div>

            <div class="flex flex-col w-11/12 bg-white border-t-8 border-t-violet-400 rounded-lg shadow-lg">
                <h2 class="pt-5 pl-5 font-medium">Описание вакансии</h2>
                <pre class="font-sans pl-5 pt-3">{{$post->description}}</pre>
                <h2 class="pt-5 pl-5 font-medium">Обязанности работника</h2>
                <pre class="font-sans pl-5 pt-3">{{$post->responsibility}}</pre>
                <h2 class="pt-5 pl-5 font-medium">Требования к работнику</h2>
                <pre class="font-sans pl-5 pt-3">{{$post->requirement}}</pre>
                <h2 class="pt-5 pl-5 font-medium">Условия работы</h2>
                <pre class="font-sans pl-5 pt-3">{{$post->conditions}}</pre>
                <h2 class="pt-5 pl-5 font-medium">Требуемые навыки</h2>
                <pre class="font-sans pl-5 pt-3">{{$post->skills}}</pre>
                <p class="m-5 text-end text-gray-400">Дата создания: {{ $post->created_at}}</p>
            </div>
        </div>

    @include('layouts.footer')
@endsection
