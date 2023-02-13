@extends('layouts.head')

@section('title')Изменение поста @endsection

@section('content')
    @include('cabinet.cab-admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Изменение поста</h1>
        <div class="h-2 bg-violet-400 rounded-t-md w-full"></div>
        <form action="{{ route('cabinet.news.edit', $post->id) }}" method="post" enctype="multipart/form-data" class="w-full bg-base-200 dark:bg-slate-700 p-5 rounded-md mb-5 shadow-lg">
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
            <input type="text" id="input1" name="name" placeholder="Заголовок" value="{{ $post->name }}"
                   class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
            <label class="block font-semibold mt-2" for="input2">Описание</label>
            <textarea id="textarea1" name="content" placeholder="Описание"
                class="w-full p-3 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">{{ $post->content }}</textarea>
            <label class="block font-semibold mt-2" for="input13">Загрузите фото</label>
            <input type="file" id="input2" name="image"
                   class="mt-2 file-input w-full max-w-xs border-2 outline-none rounded-md focus:border-violet-400 dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
            <button type="submit"
                    class="block mt-4 bg-violet-400 text-white py-2 px-6 rounded-md hover:bg-violet-600 ">Отправить</button>
        </form>

    </main>

@endsection
