@extends('layouts.head')

@section('title')Список ваших вакансий
@endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 text-violet-400 rounded-lg font-medium text-xl my-10 p-5">Мои вакансии</h1>
        <div class="w-full text-left">
            <a href="{{ route('cabinet.job.add-form') }}" class="btn btn-sm sm:btn-md btn-primary border-0 mb-2">Добавить</a>
        </div>
        <div class="overflow-x-auto w-full mb-3 rounded-lg">
            @if(session('message'))
                <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 dark:bg-slate-700 dark:text-green-400 rounded-md">
                    <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
                </div>
            @endif
            <table class="table table-compact md:table-normal table-auto w-full rounded-t-lg">
                <thead class="bg-base-200 dark:bg-slate-700">
                    <tr>
                        <td class="dark:bg-slate-700">id</td>
                        <td class="dark:bg-slate-700">Название</td>
                        <td class="text-center dark:bg-slate-700"><i class="fa-regular fa-pen-to-square"></i></td>
                        <td class="text-center dark:bg-slate-700"><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                </thead>
                <tbody class="border-b dark:border-base-200">
                    @foreach($jobs->items() as $job)
                        <tr>
                            <td><a href="{{ route('jobs_post', $job->id) }}" class="hover:text-violet-400">{{ $job->id }}<i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a></td>
                            <td class="whitespace-normal">{{ $job->name }}</td>
                            <td class="text-center"><a href="{{ route('cabinet.job.update-form', $job->id) }}" class="hover:text-violet-400"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td class="text-center"><a href="{{ route('cabinet.job.delete', $job->id) }}" class="hover:text-violet-400"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $jobs->links('layouts.simple-pagination') }}
    </main>

@endsection
