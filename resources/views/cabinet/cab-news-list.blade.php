@extends('layouts.head')

@section('title')Список ваших резюме @endsection

@section('content')
    @include('cabinet.cab-admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Список новостей</h1>
        <div class="w-full text-left">
            <a href="{{ route('cabinet.news.add-form') }}" class="btn text-white bg-violet-400 hover:bg-violet-600 mb-2 ">Добавить</a>
        </div>
            @if(session('message'))
                <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-700 rounded-md">
                    <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
                </div>
            @endif
        <div class="overflow-x-auto w-full mb-3 rounded-lg">
            
            <table class="table table-compact md:table-normal table-auto w-full">
                <thead class="bg-base-200 dark:bg-slate-700">
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th><i class="fa-regular fa-pen-to-square"></i></th>
                    <th><i class="fa-regular fa-trash-can"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($news->items() as $new)
                    <tr class="border-b border-violet-400">
                        <th><a href="{{ route('news_post', $new->id) }}" class="hover:text-violet-400">{{ $new->id }}<i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a></th>
                        <td>{{ $new->name }}</td>
                        <td class="text-center"><a href="{{ route('cabinet.news.edit-form', $new->id) }}" class="hover:text-violet-400"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td class="text-center"><a href="{{ route('cabinet.news.delete', $new->id) }}" class="hover:text-violet-400"><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $news->links('layouts.simple-pagination') }}
    </main>

@endsection
