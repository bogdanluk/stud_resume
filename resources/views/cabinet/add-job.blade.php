@extends('layouts.head')

@section('title')Добавление вакансии
@endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Добавление вакансии</h1>
        <form action="{{ route('cabinet.job.add-form') }}" method="post" enctype="multipart/form-data" class="block text-center w-full md:w-4/5 bg-base-200 dark:bg-slate-700 p-5 border-violet-400 rounded-lg border-t-8 mb-5 shadow-lg">
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
            <label class="block text-start font-semibold" for="input1">Название</label>
            <input type="text" id="input1" name="name" placeholder="Заголовок"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input2">Описание</label>
            <textarea type="text" id="input2" name="description" placeholder="Описание"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input3">Требования</label>
            <textarea type="text" id="input3" name="requirements" placeholder="Требования"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input4">Обязанности</label>
            <textarea type="text" id="input4" name="responsibilities" placeholder="Обязанности"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input5">Зарплата</label>
            <input type="number" id="input5" name="salary" placeholder="Зарплата"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input6">Контакты</label>
            <textarea type="text" id="input6" name="contacts" placeholder="Контакты"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold" for="input7">Компания</label>
            <input type="text" id="input7" name="company_name" placeholder="Компания"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input8">Условия работы</label>
            <textarea type="text" id="input8" name="work_conditions" placeholder="Условия работы"
                      class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input9">Выберите город</label>
            <select name="city_id" id="input9"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваш город</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            <label class="block text-start font-semibold mt-2" for="input10">Выберите категорию</label>
            <select name="category_id" id="input10"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Категория</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="block text-start font-semibold mt-2" for="input11">Выберите тип трудоустройства</label>
            <select name="job_type_id" id="input11"
                    class="select w-full text-slate-400 border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Тип трудоустройства</option>
                @foreach($jobTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <button type="submit"
                    class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 transition-all duration-200">Отправить</button>
        </form>

    </main>

@endsection
