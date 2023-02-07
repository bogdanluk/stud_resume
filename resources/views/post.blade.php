@extends('layouts.head')

@section('title'){{$post->name}}
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex w-full min-h-screen justify-center">
        <div class="flex flex-col mt-10 px-5 md:w-4/5">
            <img class="flex max-h-96 mx-auto" src="/storage/news/{{ $post->image }}" alt="{{ $post->image}}"/>
            <h1 class="text-2xl text-center p-5 text-violet-400">{{$post->name}}</h1>
            <pre class="mb-2 font-sans font-normal whitespace-pre-wrap">{{$post->content}}</pre>
            <p class="w-full text-end text-slate-400">Дата создания: {{ $post->created_at}}</p>
        </div>
    </div>
    @include('layouts.footer')
@endsection
