@extends('layouts.head')

@section('title')
    Резюме
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="grid grid-cols-3 gap-5 m-5 min-h-screen">
        <div class="col-span-full lg:col-span-1 w-full h-min border-t-8 bg-base-200 dark:bg-slate-700 border-t-violet-400 rounded-lg shadow-lg p-3 wow animate__fadeInUp">
            <h2 class="font-semibold text-center text-xl">Фильтры</h2>
            <form method="get" action="{{route('resumes')}}">
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <input type="text" name="name" placeholder="Название" value="{{$request->name}}" id="resumi_1" onchange="changeStyle('resumi_1');"
                           class="py-2 w-full text-slate-400 px-5 dark:bg-slate-800 border-2 dark:border-slate-400 placeholder-shown:border-slate-200 placeholder:text-slate-400 outline-none focus:text-violet-400 focus:border-violet-400 rounded-full dark:focus:border-violet-400 transition-all duration-200">
                </div>
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <select name="category_id" id="resumi_2" onchange="changeStyle('resumi_2');"
                            class="py-2 w-full px-5 border-2 outline-none text-slate-400 dark:bg-slate-800 dark:border-slate-400 focus:text-violet-400 focus:border-violet-400 rounded-full appearance-none cursor-pointer dark:focus:border-violet-400 transition-all duration-200">
                        <option disabled selected class="text-gray-300">Категория</option>
                        @foreach ($categories as $category)
                            <option class="text-black dark:text-white" value="{{$category->id}}" @selected($category->id == $request->category_id)>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <select name="city_id" id="resumi_3" onchange="changeStyle('resumi_3');"
                            class="py-2 w-full px-5 border-2 outline-none text-slate-400 dark:bg-slate-800 dark:border-slate-400 focus:text-violet-400 focus:border-violet-400 rounded-full appearance-none cursor-pointer dark:focus:border-violet-400 transition-all duration-200">
                        <option disabled selected class="text-gray-300">Город</option>
                        @foreach ($cities as $city)
                            <option class="text-black dark:text-white" value="{{$city->id}}" @selected($city->id == $request->city_id)>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-row m-3">
                    <i class="fa-solid fa-circle-dot mt-3 text-violet-400 mr-3"></i>
                    <select name="education_id" id="resumi_4" onchange="changeStyle('resumi_4');"
                            class="py-2 w-full px-5 border-2 outline-none text-slate-400 dark:bg-slate-800 dark:border-slate-400 focus:text-violet-400 focus:border-violet-400 rounded-full appearance-none cursor-pointer dark:focus:border-violet-400 transition-all duration-200">
                        <option disabled selected class="text-gray-300">Уровень образования</option>
                        @foreach ($educations as $education)
                            <option class="text-black dark:text-white" value="{{$education->id}}" @selected($education->id == $request->education_id)>{{$education->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2 flex flex-row justify-between">
                    <button class="btn btn-sm sm:btn-md btn-primary mr-2 border-0"
                            type="submit">Применить</button>
                    <a href="{{ route('resumes') }}" class="btn btn-sm sm:btn-md btn-outline">Сбросить</a>
                </div>
            </form>
        </div>

        <div class="col-span-full lg:col-span-2 w-full items-center">
            @foreach($resumes as $resume)
                <div class="card mb-5 w-full card-side bg-base-200 shadow-xl rounded-lg border-l-8 border-l-violet-400 dark:bg-slate-700 wow animate__fadeInUp">
                    <div class="card-body">
                        <h2 class="card-title text-xl ml-5 mt-5 mr-5 font-medium">{{ $resume->name }}</h2>
                        <div class="flex flex-row items-center mb-2 mt-5 mx-5">
                            <i class="fa-solid fa-list fa-xl text-yellow-400"></i>
                            <p class="pl-7">{{ $resume->category->name }}</p>
                        </div>
                        <div class="flex flex-row items-center mt-2 mb-5 mx-5">
                            <i class="fa-solid fa-city fa-xl text-yellow-400"></i>
                            <p class="pl-5">{{ $resume->city->name }}</p>
                        </div>
                        <div class="card-actions justify-end items-center">
                            <p class="ml-5 text-slate-400"><i
                                    class="fa-regular fa-clock pr-5"></i>{{ $resume['created_at'] }}</p>
                            <a class="btn btn-sm sm:btn-md btn-primary border-0" href="{{ route('resumes_post', $resume->id) }}">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $resumes->links('layouts.simple-pagination') }}
        </div>
    </div>

    @include('layouts.footer')

    <script>
        function changeStyle(id){
            var elem = document.getElementById(id);
            elem.classList.add('text-violet-400', 'border-violet-400');
        }
        const url_name = new URL(location.href).searchParams.get('name');
        const url_catId = new URL(location.href).searchParams.get('category_id');
        const url_cityId = new URL(location.href).searchParams.get('city_id');
        const url_educationId = new URL(location.href).searchParams.get('education_id');
        if (url_name != null && url_name !== "") {
            changeStyle("resumi_1");
        }
        if (url_catId != null  && url_catId !== "") {
            changeStyle("resumi_2")
        }
        if (url_cityId != null  && url_cityId !== "") {
            changeStyle("resumi_3")
        }
        if (url_educationId != null  && url_educationId !== "") {
            changeStyle("resumi_4")
        }
    </script>
@endsection
