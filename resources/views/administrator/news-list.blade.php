@extends('layouts.head')

@section('title')Список новостей @endsection

@section('content')
    @include('administrator.admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Список новостей</h1>
        <div class="w-full text-left">
            <a href="{{ route('admin.news.add-form') }}"
               class="btn btn-sm sm:btn-md btn-primary border-0 mb-2">Добавить</a>
        </div>
        @if(session('message'))
            <div class="flex w-full mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-700 dark:text-green-400 rounded-md">
                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
            </div>
        @endif
        <table class="table table-compact md:table-normal table-auto w-full">
            <thead>
                <tr>
                    <td class="dark:bg-slate-700">id</td>
                    <td class="dark:bg-slate-700">Заголовок</td>
                    <td class="dark:bg-slate-700 text-center"><i class="fa-regular fa-pen-to-square"></i></td>
                    <td class="dark:bg-slate-700 text-center"><i class="fa-regular fa-trash-can"></i></td>
                </tr>
            </thead>
            <tbody class="border-b border-base-200">
                @foreach($news->items() as $new)
                    <tr>
                        <td><a href="{{ route('news_post', $new->id) }}"
                            class="hover:text-violet-400">{{ $new->id }}<i
                                    class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a></td>
                        <td class="whitespace-normal">{{ $new->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.news.edit-form', $new->id) }}" class="hover:text-violet-400">
                                <i class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.news.delete', $new->id) }}"
                            class="hover:text-violet-400"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $news->links('layouts.simple-pagination') }}
    </main>

@endsection
