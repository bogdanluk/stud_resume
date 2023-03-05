@extends('layouts.head')

@section('title')Новости
@endsection

@section('content')
    @include('layouts.navbar')

    <div class="flex flex-col items-center min-h-screen">
      @foreach ($posts->items() as $post)
        <div class="card mb-5 mt-5 w-11/12 lg:w-3/5 min-h-min md:card-side bg-base-200 dark:bg-slate-700 shadow-xl rounded-lg wow animate__fadeInUp">
          <figure><img class="w-48 max-h-48" src="storage/{{ $post['image']  }}" alt="{{ $post['image']  }}"/></figure>
          <div class="card-body">
            <h2 class="card-title ml-5 mt-5 mr-5 font-medium">{{ $post['name'] }}</h2>
            <p class="overflow-hidden break-normal card-content max-w-xl m-5">{{ $post['content'] }}</p>
            <div class="card-actions justify-end items-center">
              <p class="ml-5 text-slate-400"><i class="fa-regular fa-clock pr-5"></i>{{ $post['created_at'] }}</p>
              <a class="btn btn-primary mr-2 border-0" href="{{ route('news_post', $post['id']) }}">Прочитать</a>
            </div>
          </div>
        </div>
      @endforeach
        {{ $posts->links('layouts.simple-pagination') }}
    </div>
    @include('layouts.footer')
@endsection
