@extends('layouts.head')

@section('title')Добавление резюме
@endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Добавление резюме</h1>
        <form action="{{ route('cabinet.resume.create') }}" method="post" enctype="multipart/form-data" class="block text-center w-full md:w-4/5 bg-base-200 dark:bg-slate-700 p-5 border-violet-400 rounded-lg border-t-8 mb-5 shadow-lg">
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
            <label class="block text-start font-semibold" for="input1">ФИО</label>
            <input type="text" id="input1" name="name" placeholder="ФИО"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input2">Возраст</label>
            <input type="number" id="input2" name="age" placeholder="Возраст"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input3">О себе</label>
            <textarea type="text" id="input3" name="about" placeholder="О себе"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input4">Опыт работы</label>
            <textarea type="text" id="input4" name="experience" placeholder="Опыт работы"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input5">Выберите образование</label>
            <select name="education_id" id="input5"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваше образование</option>
                @foreach($educations as $education)
                    <option value="{{ $education->id }}">{{ $education->name }}</option>
                @endforeach
            </select>
            <label class="block text-start font-semibold mt-2" for="input6">Выберите город</label>
            <select name="city_id" id="input6"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваш город</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            <label class="block text-start font-semibold mt-2" for="input7">Выберите категорию</label>
            <select name="category_id" id="input7"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Категория</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2 text-start" for="input8">Загрузите фото</label>
            <input type="file" id="input8" name="avatar"
                   class="mt-2 file-input file-input-bordered file-input-primary text-xs dark:bg-slate-800 md:text-base focus:outline-violet-400 w-full">
            <button type="submit"
                    class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 transition-all duration-200">Отправить</button>
        </form>

    </main>

@endsection
