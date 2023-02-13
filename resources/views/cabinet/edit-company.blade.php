@extends('layouts.head')

@section('title')Изменение компании @endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Изменение компании</h1>
        <div class="h-2 bg-violet-400 rounded-t-md w-full"></div>
        <form action="{{ route('cabinet.company.update', $company->id) }}" method="post" enctype="multipart/form-data" class="w-full bg-base-200 dark:bg-slate-700 p-5 rounded-md mb-5 shadow-lg">
            @if($errors->any())
                <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 dark:bg-slate-800 rounded-md">
                    <span class="font-medium">Ошибка:</span>
                    <ul class="mt-1.5 ml-1 list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li class="ml-3 text-sm font-medium">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <label class="block font-semibold" for="input1">Название</label>
            <input type="text" id="input1" name="name" placeholder="Название" value="{{ $company->name }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input2">Деятельность</label>
            <input type="text" id="input2" name="activity" placeholder="Деятельность" value="{{ $company->activity }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input3">Email</label>
            <input type="text" id="input3" name="email" placeholder="Email" value="{{ $company->email }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input4">Телефон</label>
            <input type="number" id="input4" name="phone" placeholder="Телефон" value="{{ $company->phone }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input5">Ссылка на сайт</label>
            <input type="text" id="input5" name="link" placeholder="Ссылка на сайт" value="{{ $company->link }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input6">О компании</label>
            <input type="text" id="input6" name="description" placeholder="О компании" value="{{ $company->description }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input7">Загрузите фото</label>
            <input type="file" name="image" id="input7"
                   class="mt-2 file-input w-full max-w-xs border-2 outline-none rounded-md focus:border-violet-400 dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">

            <button type="submit"
                    class="block mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600">Отправить</button>
        </form>

    </main>

@endsection
