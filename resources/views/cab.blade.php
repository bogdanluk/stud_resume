@extends('layouts.head')

@section('title') Личный кабинет @endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center w-full">
        <h1 class="bg-violet-400 rounded-lg shadow-lg text-white font-medium text-xl my-10 p-5">Личный кабинет</h1>
        <div class="flex flex-col items-center flex-wrap mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            {{-- <div class="flex flex-col items-center text-center my-5 mx-5">
                <img class="max-h-48 w-max object-scale-down  rounded-lg" src="/storage/resumes/bogdan.jpg"/>
                <p class="mt-3 w-3/4">Лукашев Богдан Владимирович</p>
            </div> --}}
            <div class="flex flex-row justify-center flex-wrap mx-10">
                <div class="flex flex-col items-center text-center my-5 mx-5">
                    <div class="avatar">
                        <div class="w-44 rounded-xl">
                            <img class="object-left-top" src="/storage/resumes/bogdan.jpg" />
                        </div>
                    </div>
                    <p class="mt-3 w-3/4">Лукашев Богдан Владимирович</p>
                </div>
                <div class="flex flex-row flex-wrap justify-center text-center my-5">
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Логин</span></p>
                        <a class="mt-2 mb-5">aspriv1</a>
                    </div>
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Email</span></p>
                        <p class="mt-2 mb-5">aspriv1@yandex.ru</p>
                    </div>
                </div>
            </div>
            <a class="btn w-36 my-5 bg-violet-400 text-white font-medium ease-in hover:bg-violet-600" href="#">Выйти</a>
        </div> 
        <div class="overflow-x-auto flex flex-col mx-10 bg-base-200 rounded-lg shadow-lg">
            <table class="table table-compact w-full">
              <!-- head -->
              <thead class="bg-violet-400 text-white">
                <tr>
                  <th></th>
                  <th>Резюме</th>
                  <th>Дата создания</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                <tr class="hover:bg-white active:text-white active:bg-violet-400">
                  <th>1</th>
                  <td>Cy Ganderton</td>
                  <td>Quality Control Specialist</td>
                  <td class="active:text-white font-medium"><a href='{{ route('home') }}'>Открыть</a></td>
                </tr>
                <!-- row 2 -->
                <tr class="hover:bg-white active:text-white active:bg-violet-400">
                  <th>2</th>
                  <td>Hart Hagerty</td>
                  <td>Desktop Support Technician</td>
                  <td class="active:text-white font-medium"><a href='{{ route('home') }}'>Открыть</a></td>
                </tr>
              </tbody>
            </table>
            <a class="text-center py-2 text-white bg-violet-400 font-medium transition-all ease-in hover:bg-violet-600 rounded-b-lg" href='{{ route('home') }}'><i class="fa-solid fa-square-plus fa-lg mr-2"></i>Создать резюме</a>
          </div>   
    </div>
    @include('layouts.footer')
@endsection
