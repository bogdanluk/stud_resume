@extends('layouts.head')

@section('title')Изменение вакансии @endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Изменение вакансии</h1>
        <div class="h-2 bg-violet-400 rounded-t-md w-full"></div>
        <form action="{{ route('cabinet.job.update-form', $job->id) }}" method="post" enctype="multipart/form-data" class="w-full bg-base-200 dark:bg-slate-700 p-5 rounded-md mb-5 shadow-lg">
            @if($errors->any())
                <div class="block mt-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 dark:bg-slate-800 dark:text-red-400 rounded-md">
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
            <input type="text" id="input1" name="name" placeholder="Заголовок" value="{{ $job->name }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input2">Описание</label>
            <textarea type="text" id="input2" name="description" placeholder="Описание"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">{{ $job->description }}</textarea>
            <label class="block font-semibold mt-2" for="input3">Зарплата</label>
            <input type="number" id="input3" name="salary" placeholder="Зарплата" value="{{ $job->salary }}"
                   class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input4">Выберите город</label>
            <select name="city_id" id="input4"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваш город</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}"
                        @selected($job->city_id == $city->id)>{{ $city->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input5">Выберите категорию</label>
            <select name="category_id" id="input5"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Категория</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected($job->category_id == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input6">Выберите тип трудоустройства</label>
            <select name="job_type_id" id="input6"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Тип трудоустройства</option>
                @foreach($jobTypes as $type)
                    <option value="{{ $type->id }}"
                        @selected($job->job_type_id == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
            <button type="submit"
                    class="block mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
        </form>

    </main>

@endsection
