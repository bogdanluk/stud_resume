@extends('layouts.head')

@section('title') Вакансии @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col flex-wrap items-center my-5 mx-5">
      <div class="flex flex-col w-3/6 mt-5 h-56 border-t-8 border-t-violet-400 rounded-lg shadow-lg">
        <h2 class="m-3">Фильтр</h2>
        <div class="flex flex-row m-3">
          <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
          <form method="post" action="{{route('job.filter')}}">
            @csrf
            <select class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full appearance-none cursor-pointer" name="filter_id" id="filter">
              <option disabled selected>Категория</option>
              @foreach ($categorys as $category)
                <option value="{{$category->id}}">{{$category->name_category}}</option>
              @endforeach
            </select>
            <button class="btn w-min ml-10 mt-10 bg-violet-400 text-white ease-in hover:bg-violet-600" type="submit">Прочитать</button>
          </form>
        </div>
      </div>
      <div class="flex flex-col w-11/12 items-center">
        @foreach ($posts as $post)
          <div class="card mb-5 mt-5 w-3/5 lg:card-side bg-base-200 shadow-xl rounded-lg border-l-8 border-l-violet-400 dark:bg-slate-700">
            <div class="card-body">
              <h2 class="card-title ml-5 mt-5 mr-5 font-medium">{{ $post['name'] }}</h2>
              <p class="m-5">{{ $post['payment'] }}</p>
              <div class="card-actions justify-end items-center">
                <p class="ml-5 text-slate-400"><i class="fa-regular fa-clock pr-5"></i>{{ $post['created_at'] }}</p>
                <a class="btn bg-violet-400 text-white mr-5 mb-3 ease-in hover:bg-violet-600" href="{{ route('job.open_post', $post->id) }}">Прочитать</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    @include('layouts.footer')
@endsection
