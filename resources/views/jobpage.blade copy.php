@extends('layouts.head')

@section('title') Вакансии @endsection

@section('content')
    @include('layouts.navbar')

    <div class="flex flex-col items-center">
      @foreach ($posts as $post)
        <div class="card mb-5 mt-5 w-3/5 lg:card-side bg-base-100 shadow-xl rounded-lg border-l-8 border-l-violet-400">
          <div class="card-body">
            <h2 class="card-title ml-5 mt-5 mr-5 font-medium">{{ $post['name'] }}</h2>
            <p class="m-5">{{ $post['payment'] }}</p>
            {{-- <p class="overflow-ellipsis overflow-hidden break-normal max-h-12 max-w-xl m-5">{{ $post['content'] }}</p> --}}
            <div class="card-actions justify-end items-center">
              <p class="ml-5 text-gray-400"><i class="fa-regular fa-clock pr-5"></i>{{ $post['created_at'] }}</p>
              <a class="btn bg-violet-400 text-white mr-5 mb-3 ease-in hover:bg-violet-600" {{-- href="{{ route('news.open_post', $post->id) }}"--}}>Прочитать</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    @include('layouts.footer')
@endsection
