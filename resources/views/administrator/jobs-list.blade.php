@extends('layouts.head')

@section('title')Список вакансий @endsection

@section('content')
    @include('administrator.admin-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Список вакансий</h1>
        @if(session('message'))
            <div class="flex w-full mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-700 dark:text-green-400 rounded-md">
                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
            </div>
        @endif
        <div class="overflow-x-auto w-full mb-3 rounded-lg">

            <table class="table table-compact md:table-normal table-auto w-full">
                <thead class="bg-base-200 dark:bg-slate-700">
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th><i class="fa-regular fa-trash-can"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs->items() as $job)
                    <tr class="border-b border-violet-400">
                        <th><a href="{{ route('jobs_post', $job->id) }}"
                               class="hover:text-violet-400">{{ $job->id }}<i
                                    class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a></th>
                        <td>{{ $job->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.job.delete', $job->id) }}"
                               class="hover:text-violet-400"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $jobs->links('layouts.simple-pagination') }}
    </main>

@endsection
