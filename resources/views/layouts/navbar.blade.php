<div class="navbar bg-base-100 border-b-2 border-gray-200 dark:border-slate-600 dark:bg-slate-800 rounded-md p-2">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-base-100 dark:bg-slate-700 rounded-box w-52">
                @if(request()->route()->getName() == 'home')
                    <li class="mr-2 text-lg active p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg link rounded-lg"><a href="{{ route('home') }}">Главная</a></li>
                @else
                    <li class="mr-2 text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('home') }}">Главная</a></li>
                @endif
                @if(request()->route()->getName() == 'news')
                    <li class="mr-2 text-lg active p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg link rounded-lg"><a href="{{ route('news') }}">Новости</a></li>
                @else
                    <li class="mr-2 text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('news') }}">Новости</a></li>
                @endif
                @if(request()->route()->getName() == 'jobs')
                    <li class="mr-2 text-lg active p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg link rounded-lg"><a href="{{ route('jobs') }}">Вакансии</a></li>
                @else
                    <li class="mr-2 text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('jobs') }}">Вакансии</a></li>
                @endif
                @if(request()->route()->getName() == 'resumes')
                    <li class="mr-2 text-lg active p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg link rounded-lg"><a href="{{ route('resumes') }}">Резюме</a></li>
                @else
                    <li class="mr-2 text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('resumes') }}">Резюме</a></li>
                @endif
                @if(isset(auth()->user()->role_id) && auth()->user()->role_id == 1)
                    <li class="mr-2 text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('admin.main') }}">Админка</a></li>
                @endif
                @guest
                    <li class="text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('login') }}">Вход</a></li>
                    <li class="text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('register') }}">Регистрация</a></li>
                @endguest
                @auth
                    <li class="text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('cabinet.main') }}">Личный кабинет</a></li>
                    <li class="text-lg p-1 hover:text-white hover:bg-violet-400 hover:rounded-lg"><a href="{{ route('logout') }}">Выйти</a></li>
                @endauth
            </ul>
        </div>

        <a class="text-xl">StudResume</a>
        <button class="ml-5 text-xl" data-toggle-theme="dark,light" data-act-class="light" id="btntheme"><i class="fa-regular fa-moon" id="themetoggler"></i></button>

    </div>
    <div class="navbar-center hidden md:flex dark:bg-slate-800">
        <ul class="menu menu-horizontal px-1">
            @if(request()->route()->getName() == 'home')
                <li class="mr-2 text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('home') }}">Главная</a></li>
            @else
                <li class="mr-2 text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('home') }}">Главная</a></li>
            @endif
            @if(request()->route()->getName() == 'news')
                <li class="mr-2 text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('news') }}">Новости</a></li>
            @else
                <li class="mr-2 text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('news') }}">Новости</a></li>
            @endif
            @if(request()->route()->getName() == 'jobs')
                <li class="mr-2 text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('jobs') }}">Вакансии</a></li>
            @else
                <li class="mr-2 text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('jobs') }}">Вакансии</a></li>
            @endif
            @if(request()->route()->getName() == 'resumes')
                <li class="mr-2 text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('resumes') }}">Резюме</a></li>
            @else
                <li class="mr-2 text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('resumes') }}">Резюме</a></li>
            @endif
            @if(isset(auth()->user()->role_id) && auth()->user()->role_id == 1)
                    <li class="mr-2 text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('admin.main') }}">Админка</a></li>
            @endif
        </ul>
    </div>
    <div class="navbar-end hidden md:flex">
        @guest
            <a class="btn text-white btn-sm bg-violet-400 mr-2 hover:bg-violet-600" href="{{ route('login') }}">Вход</a>
            <a class="btn text-violet-400 btn-sm border-2 border-violet-400 mr-2 hover:bg-violet-400 hover:text-white" href="{{ route('register') }}">Регистрация</a>
        @endguest
        @auth
            <a class="btn text-violet-400 btn-sm border-2 border-violet-400 mr-2 hover:bg-violet-400 hover:text-white" href="{{ route('cabinet.main') }}">Личный кабинет</a>
            <a class="btn text-white btn-sm bg-violet-400 mr-2 hover:bg-violet-600" href="{{ route('logout') }}">Выйти</a>
        @endauth
    </div>
</div>
