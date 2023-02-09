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
                <p class="pt-3 pl-5">
                    {{$job->payment}}
                </p>
                <h2 class="pt-3 pl-5 font-medium">Опыт работы</h2>
                <p class="py-3 pl-5">
                    {{$job->experience}}
                </p>
            </div>

            <div class="flex flex-col justify-center flex-wrap w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
                <div class="flex flex-col items-center my-3 mx-5">
                    <h2 class="font-medium">Компания</h2>
                    <div class="flex flex-col items-center mt-3">
                        <img class="max-h-96 w-48 rounded-lg" src="/storage/news/{{ $job->company->image }}" alt="{{ $job->company->image}}"/>
                        <p class="mt-3">{{$job->company->name}}</p>
                    </div>
                </div>
                <div class="flex flex-col items-center flex-wrap my-3 mx-5 col-span-3">
                    <h2 class="font-medium">Контактные данные</h2>
                    <div class="flex flex-row justify-center flex-wrap text-center my-3">
                        <div class="flex flex-col mx-5">
                            <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Email</span></p>
                            <a class="mt-2 mb-5 hover:text-violet-400" href="mailto:{{$job->company->email}}">{{$job->company->email}}</a>
                        </div>
                        <div class="flex flex-col mx-5">
                            <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Телефон</span></p>
                            <p class="mt-2 mb-5">{{$job->company->phone}}</p>
                        </div>
                        <div class="flex flex-col mx-5">
                            <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Сайт</span></p>
                            <a class="mt-2 hover:text-violet-400" href="{{$job->company->link}}">Перейти на сайт</a>
                        </div>
                    </div>
                    <a class="btn my-5 bg-violet-400 text-white font-medium w-2/4 ease-in hover:bg-violet-600" href="{{ route('company.open_post', $job->company->id) }}">Подробнее</a>
                </div>
            </div>

            <div class="flex flex-col w-11/12 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg dark:bg-slate-700">
                <h2 class="mt-3 pl-5 font-medium">Описание вакансии</h2>
                <pre class="font-sans pl-5 mt-3 whitespace-pre-wrap break-normal">{{$job->description}}</pre>
                <h2 class="mt-3 pl-5 font-medium">Обязанности работника</h2>
                <pre class="font-sans px-5 mt-3 whitespace-pre-wrap break-normal">{{$job->responsibility}}</pre>
                <h2 class="mt-3 pl-5 font-medium">Требования к работнику</h2>
                <pre class="font-sans px-5 mt-3 whitespace-pre-wrap break-normal">{{$job->requirement}}</pre>
                <h2 class="mt-3 pl-5 font-medium">Условия работы</h2>
                <pre class="font-sans px-5 mt-3 whitespace-pre-wrap break-normal">{{$job->conditions}}</pre>
                <h2 class="mt-3 pl-5 font-medium">Требуемые навыки</h2>
                <pre class="font-sans px-5 mt-3 whitespace-pre-wrap break-normal">{{$job->skills}}</pre>
                <p class="m-3 text-end text-gray-400">Дата создания: {{ $job->created_at}}</p>
            </div>
        </div>

    @include('layouts.footer')
@endsection
