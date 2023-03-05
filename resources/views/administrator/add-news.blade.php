@extends('layouts.head')

@section('title')Добавление новости
@endsection

@section('content')
    @include('administrator.admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Добавление новости</h1>
        <form action="{{ route('admin.news.create') }}" method="post" enctype="multipart/form-data"
              class="block w-full md:w-4/5 text-center border-violet-400 rounded-lg border-t-8 bg-base-200 dark:bg-slate-700 p-5 mb-5 shadow-lg">
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
            <label class="block text-start font-semibold" for="input1">Заголовок</label>
            <input type="text" id="input1" name="name" placeholder="Заголовок"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block text-start font-semibold mt-2" for="input2">Описание</label>
            <textarea id="input2" name="content" placeholder="Описание"
                      class="w-full p-2 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400"></textarea>
            <label class="block text-start font-semibold mt-2" for="input3">Загрузите фото</label>
            <input type="file" id="input3" name="image"
                   class="block mt-2 file-input file-input-bordered file-input-primary focus:outline-violet-400 w-full text-xs md:w-2/4 md:text-base dark:bg-slate-800">
            <button type="submit"
                    class="mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 transition-all duration-200">Отправить</button>
        </form>

    </main>

@endsection
