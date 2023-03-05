@extends('layouts.head')

@section('title')Список резюме @endsection

@section('content')
    @include('administrator.admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Список резюме</h1>
        @if(session('message'))
            <div class="flex w-full mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-700 dark:text-green-400 rounded-md">
                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
            </div>
        @endif
        <div class="overflow-x-auto w-full mb-3 rounded-lg">
            <table class="table table-compact md:table-normal table-auto w-full">
                <thead class="bg-base-200 dark:bg-slate-700">
                <tr>
                    <td class="dark:bg-slate-700">id</td>
                    <td class="dark:bg-slate-700">ФИО</td>
                    <td class="dark:bg-slate-700 text-center"><i class="fa-regular fa-trash-can"></i></td>
                </tr>
                </thead>
                <tbody class="border-b border-base-200">
                    @foreach($resumes->items() as $resume)
                        <tr>
                            <td><a href="{{ route('resumes_post', $resume->id) }}"
                                class="hover:text-violet-400">{{ $resume->id }}<i
                                        class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a></td>
                            <td class="whitespace-normal">{{ $resume->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('cabinet.resume.delete', $resume->id) }}"
                                class="hover:text-violet-400"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $resumes->links('layouts.simple-pagination') }}
    </main>

@endsection
