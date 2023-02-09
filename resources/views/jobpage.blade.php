@extends('layouts.head')

@section('title') Вакансии @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col flex-wrap items-center my-5 mx-5">
      <div class="flex flex-col w-2/6 mt-5 h-min border-t-8 border-t-violet-400 rounded-lg shadow-lg">
        <h2 class="m-3">Фильтр</h2>
        
          
          <form method="post" action="{{route('job.filter')}}">
            @csrf
            <div class="flex flex-row m-3">
              <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
              <select class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full appearance-none cursor-pointer" name="filter_category" id="category_id">
                <option disabled selected>Категория</option>
                @foreach ($categorys as $category)
                  <option value="{{$category->id_category}}">{{$category->name_category}}</option>
                @endforeach
              </select>
            </div>
            <div class="flex flex-row m-3">
              <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
              <select class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full appearance-none cursor-pointer" name="filter_city" id="city_id">
                <option disabled selected>Город</option>
                @foreach ($cities as $city)
                  <option value="{{$category->id}}">{{$city->name_city}}</option>
                @endforeach
              </select>
            </div>
            <button class="btn w-min ml-10 mt-10 bg-violet-400 text-white ease-in hover:bg-violet-600" type="submit">Прочитать</button>
          </form>
        
      </div>
      <div class="flex flex-col w-11/12 items-center">
        @foreach ($posts as $post)
          <div class="card mb-5 mt-5 w-3/5 lg:card-side bg-base-200 shadow-xl rounded-lg border-l-8 border-l-violet-400 dark:bg-slate-700">
            <div class="card-body">
              <h2 class="card-title ml-5 mt-5 mr-5 font-medium">{{ $post['name_jobs'] }}</h2>
              <div class="flex flex-row items-center mb-2 mt-5 mx-5 w-min">
                <i class="fa-solid fa-ruble-sign fa-xl text-yellow-400"></i>
                <p class="pl-8">{{ $post['payment'] }}</p>
              </div>
              <div class="flex flex-row items-center mt-2 mb-5 mx-5 w-min">
                <i class="fa-solid fa-city fa-xl text-yellow-400"></i>
                <p class="pl-5">{{ $post['name_city'] }}</p>
              </div>
              <div class="card-actions justify-end items-center">
                <p class="ml-5 text-slate-400"><i class="fa-regular fa-clock pr-5"></i>{{ $post['created_at'] }}</p>
                <a class="btn bg-violet-400 text-white mr-5 mb-3 ease-in hover:bg-violet-600" href="{{ route('job.open_post', $post->id_jobs) }}">Прочитать</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    @include('layouts.footer')
@endsection
