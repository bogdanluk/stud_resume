@extends('layouts.head')

@section('title')
    Вакансии
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col text-xs items-center md:flex-row md:items-start md:text-base my-5 mx-5">
        <div class="flex flex-col w-3/5 md:w-2/6 h-min border-t-8 bg-base-200 border-t-violet-400 rounded-lg shadow-lg p-3">
            <h2 class="font-semibold text-center text-xl">Фильтры</h2>
            <form method="get" action="{{route('jobs')}}">
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <input type="text" name="name" placeholder="Название" class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full cursor-text"/>
                </div>
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <select name="category_id" class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full appearance-none cursor-pointer">
                        <option disabled selected>Категория</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <select name="city_id" class="py-2 w-full px-5 border-2 outline-none focus:border-violet-400 rounded-full appearance-none cursor-pointer">
                        <option disabled selected>Город</option>
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn text-xs md:text-base ml-10 mt-2 bg-violet-400 text-white ease-in hover:bg-violet-600"
                        type="submit">Применить</button>
            </form>
        </div>

        <div class="flex flex-col w-11/12 items-center px-10">
            @foreach($jobs as $job)
                <div class="card mb-5 mt-5 w-full lg:card-side bg-base-200 shadow-xl rounded-lg border-l-8 border-l-violet-400 dark:bg-slate-700">
                    <div class="card-body">
                        <h2 class="card-title text-xl ml-5 mt-5 mr-5 font-medium">{{ $job->name }}</h2>
                        <div class="flex flex-row items-center mb-2 mt-5 mx-5 w-max">
                            <i class="fa-solid fa-list fa-xl text-yellow-400"></i>
                            <p class="pl-7">{{ $job->category->name }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 mt-3 mx-5 w-max">
                            <i class="fa-solid fa-ruble-sign fa-xl text-yellow-400"></i>
                            <p class="pl-8">{{ $job->payment }} рублей</p>
                        </div>
                        <div class="flex flex-row items-center mt-2 mb-5 mx-5 w-max">
                            <i class="fa-solid fa-city fa-xl text-yellow-400"></i>
                            <p class="pl-5">{{ $job->city->name }}</p>
                        </div>
                        <div class="card-actions justify-end items-center">
                            <p class="ml-5 text-slate-400"><i
                                    class="fa-regular fa-clock pr-5"></i>{{ $job['created_at'] }}</p>
                            <a class="btn text-xs md:text-base bg-violet-400 text-white mr-5 mb-3 ease-in hover:bg-violet-600" href="{{ route('jobs_post', $job->id) }}">Прочитать</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $jobs->links('layouts.simple-pagination') }}
        </div>
    </div>

    @include('layouts.footer')
@endsection
