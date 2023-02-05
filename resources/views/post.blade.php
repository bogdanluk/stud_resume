@extends('layouts.head')

@section('title') {{$post->name}} @endsection

@section('content')
    @include('layouts.navbar')

    <div class="flex justify-center w-full h-96 mt-16">
        <img src="/storage/news/{{ $post->image }}" alt="{{ $post->image}}"/>
    </div>

    <div class="flex flex-col items-center w-full">
        <h1 class="text-2xl text-center p-5 m-10 border-b-4 border-b-violet-400 rounded-lg">{{$post->name}}</h1>

        <div class="flex flex-col w-11/12 bg-white rounded-lg shadow-lg">
            <p class="p-5">
                {{$post->content}}
            </p>

            <p class="m-5 text-end text-gray-400">Дата создания: {{ $post->created_at}}</p>
        </div>

    </div>

    @include('layouts.footer')
@endsection
