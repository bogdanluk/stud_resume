@extends('layouts.head')

@section('title')Добавление резюме @endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Изменение резюме</h1>
        <div class="h-2 bg-violet-400 rounded-t-md w-full"></div>
        <form action="{{ route('cabinet.resume.edit', $resume->id) }}" method="post" enctype="multipart/form-data" class="w-full bg-base-200 dark:bg-slate-700 p-5 rounded-md mb-5 shadow-lg">
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
            <label class="block font-semibold" for="input1">Заголовок</label>
            <input type="text" id="input1" name="name" placeholder="Заголовок" value="{{ $resume->name }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input2">Возраст</label>
            <input type="number" id="input2" name="age" placeholder="Возраст" value="{{ $resume->age }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input3">Желаемая должность</label>
            <input type="text" id="input3" name="job" placeholder="Желаемая должность" value="{{ $resume->job }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input4">Желаемая запрлата</label>
            <input type="number" id="input4" name="payment" placeholder="Желаемая зарплата" value="{{ $resume->payment }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input5">Номер телефона</label>
            <input type="text" id="input5" name="phone" placeholder="Номер телефона" value="{{ $resume->phone }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input6">Контактный email</label>
            <input type="text" id="input6" name="email" placeholder="email" value="{{ $resume->email }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input7">Выберите пол</label>
            <select name="gender_id" id="input7"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваш пол</option>
                @foreach($genders as $gender)
                    <option value="{{ $gender->id }}"
                        @selected($resume->gender_id == $gender->id)>{{ $gender->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input8">Выберите образование</label>
            <select name="education_id" id="input8"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваше образование</option>
                @foreach($educations as $education)
                    <option value="{{ $education->id }}"
                        @selected($resume->education_id == $education->id)>{{ $education->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input9">Выберите город</label>
            <select name="city_id" id="input9"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Ваш город</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}"
                        @selected($resume->city_id == $city->id)>{{ $city->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input10">Выберите категорию</label>
            <select name="category_id" id="input10"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>Категория</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected($resume->category_id == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input11">Выберите желаемый график работы</label>
            <select name="timetable_id" id="input11"
                    class="select w-full text-slate-400 border-2 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                <option disabled selected>График работы</option>
                @foreach($timetables as $timetable)
                    <option value="{{ $timetable->id }}"
                        @selected($resume->timetable_id == $timetable->id)>{{ $timetable->name }}</option>
                @endforeach
            </select>
            <label class="block font-semibold mt-2" for="input12">Загрузите файл с вашим резюме</label>
            <input type="file" name="file_name" id="input12"
                   class="mt-2 file-input w-full max-w-xs border-2 outline-none rounded-md focus:border-violet-400 dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input13">Загрузите ваше фото</label>
            <input type="file" id="input13" name="avatar"
                   class="mt-2 file-input w-full max-w-xs border-2 outline-none rounded-md focus:border-violet-400 dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
            <button type="submit"
                    class="block mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
        </form>

    </main>

@endsection
