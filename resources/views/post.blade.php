@extends('layouts.head')

@section('title'){{$post->name}}
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex w-full min-h-screen justify-center">
        <div class="flex flex-col items-center mt-10 px-2 sm:px-5 md:w-4/5">
            <img class="flex max-h-96 mx-auto rounded-lg" src="/storage/{{ $post->image }}" alt="{{ $post->image}}"/>
            <h1 class="text-2xl text-center p-5 my-5 rounded-lg shadow-lg border-2 border-violet-400 text-violet-400 dark:border-2 dark:border-violet-400">{{$post->name}}</h1>
            <div class="flex flex-col mt-8 px-2 sm:px-5 rounded-lg bg-base-200 dark:bg-slate-700 border-t-violet-400 border-t-8 shadow-lg">
                <pre class="mb-2 mt-3 font-sans font-normal whitespace-pre-wrap">{{$post->content}}</pre>
                <p class="mt-3 mb-3 text-end text-gray-400">Дата создания: {{ $post->created_at}}</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
