@extends('layouts.head')

@section('title')
    Главная
@endsection

@section('content')
    @include('layouts.navbar')
    <main>
        <div class="w-full min-h-screen flex flex-col justify-center items-center py-12">
            <div class="self-center text-center w-full sm:w-2/3 xl:w-1/2 px-4 sm:px-0">
                <h1 class="font-bold tracking-wider text-4xl mb-4 text-violet-400">Проект StudResume</h1>
                <div class="font-light text-black text-xl">
                    <p>Студенчество — прекрасная пора, которую многие называют лучшей в своей жизни. <br><br>
                        <strong>Здесь каждый студент может подать своё резюме и найти работу по душе.</strong>
                    </p>
                </div>
                <img src="{{ asset('img/welcome-photo1.jpg') }}" class="my-12 max-w-full mx-auto" alt="photo1">
            </div>
            <div class="flex flex-row w-full justify-center">
                <a href="#features" class="px-10 py-2 transition text-white bg-violet-400 rounded-full shadow-md text-lg hover:bg-violet-600">Возможности</a>
            </div>
        </div>
        <div id="features" class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-200 py-12">
            <div class="self-center text-center w-full sm:w-2/3 xl:w-1/2 px-4 sm:px:0">
                <h2 class="tracking-wide text-violet-400 font-bold text-4xl mb-4">Функционал проекта</h2>
                <div class="font-light text-black text-xl mb-6">
                    <p>Мы старались сделать удобную платформу, где каждый студент сможет найти себе работу, а также
                        работодатели смогут найти себе работников. Для этого мы разработали следующий функционал.
                    </p>
                </div>
            </div>
            <div class="self-center w-full xl:w-4/5 flex flex-col sm:flex-row flex-wrap px-4 xl:px:0">
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-solid fa-user-plus block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Добавление резюме</h3>
                        <div class="font-light text-black text-lg">
                            <p>Каждый студент может добавить своё резюме, чтобы работодатели могли его просмотреть.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-solid fa-user-gear block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Добавление вакансий</h3>
                        <div class="font-light text-black text-lg">
                            <p>Любой работодатель может разместить здесь свои вакансии для студентов.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-regular fa-address-book block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Просмотр всех резюме</h3>
                        <div class="font-light text-black text-lg">
                            <p>Работодатели могут просматривать резюме всех студентов.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-regular fa-address-card block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Просмотр всех вакансий</h3>
                        <div class="font-light text-black text-lg">
                            <p>Студенты могут просматривать все вакансии.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-regular fa-comments block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Вход через соцсети</h3>
                        <div class="font-light text-black text-lg">
                            <p>Быстрая регистрация и вход через соцсети, такие, как: Google, Вконтакте, Яндекс.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-violet-200 hover:bg-opacity-50 px-4 sm:px-8 py-6 sm:py-12">
                    <div class="w-1/3 text-center">
                        <i class="fa-regular fa-newspaper block sm:mx-auto text-6xl lg:text-8xl text-yellow-400"></i>
                    </div>
                    <div class="w-2/3 xl:w-3/4">
                        <h3 class="tracking-wide text-violet-400 font-bold text-2xl uppercase mb-2">Лента с новостями проекта</h3>
                        <div class="font-light text-black text-lg">
                            <p>Новости будут публиковаться в ленте, это позволит всегда быть в курсе
                                последних новостей проекта.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="self-center text-center w-full sm:w-1/3 px-4 sm:px:0">
                <h3 class="font-bold tracking-widest text-violet-400 text-2xl my-6">...и многие другие!</h3>
            </div>
            <div class="flex flex-row w-full justify-center pt-6">
                <a class="px-10 py-2 text-white bg-violet-400 rounded-full shadow-md text-lg hover:bg-violet-600"
                    href="{{ route('register') }}">Зарегистрироваться</a>
            </div>
        </div>
    </main>
    @include('layouts.footer')
@endsection
