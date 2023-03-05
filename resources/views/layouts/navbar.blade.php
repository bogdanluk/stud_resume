<div class="navbar bg-base-200 border-b-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 rounded-b-md p-2 sticky top-0 z-10">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-sm btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content tabs tabs-boxed shadow-lg p-2">
                @if(request()->route()->getName() == 'home')
                    <li class="tab text-xl w-full mb-2"><a class="w-full tab-active" href="{{ route('home') }}">Главная</a></li>
                @else
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('home') }}">Главная</a></li>
                @endif
                @if(request()->route()->getName() == 'news')
                    <li class="tab text-xl w-full mb-2"><a class="w-full tab-active" href="{{ route('news') }}">Новости</a></li>
                @else
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('news') }}">Новости</a></li>
                @endif
                @if(request()->route()->getName() == 'jobs')
                    <li class="tab text-xl w-full mb-2"><a class="w-full tab-active" href="{{ route('jobs') }}">Вакансии</a></li>
                @else
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('jobs') }}">Вакансии</a></li>
                @endif
                @if(request()->route()->getName() == 'resumes')
                    <li class="tab text-xl w-full mb-2"><a class="w-full tab-active" href="{{ route('resumes') }}">Резюме</a></li>
                @else
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('resumes') }}">Резюме</a></li>
                @endif
                @if(isset(auth()->user()->role_id) && auth()->user()->role_id == 1)
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('admin.main') }}">Админка</a></li>
                @endif
                @guest
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('login') }}">Вход</a></li>
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('register') }}">Регистрация</a></li>
                @endguest
                @auth
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('cabinet.main') }}">Кабинет</a></li>
                    <li class="tab text-xl w-full mb-2"><a class="w-full" href="{{ route('logout') }}">Выйти</a></li>
                @endauth
            </ul>
        </div>

        <a class="text-xl ml-2">StudResume</a>
        <button class="ml-5 text-xl" data-toggle-theme="dark,light" data-act-class="light" id="btntheme"><i class="fa-regular fa-moon" id="themetoggler"></i></button>
    </div>

    <div class="navbar-center hidden lg:flex dark:bg-slate-700">
        <ul class="menu-horizontal px-1 tabs tabs-boxed bg-inherit">
            @if(request()->route()->getName() == 'home')
                <li class="tab tab-active text-xl"><a href="{{ route('home') }}">Главная</a></li>
            @else
                <li class="tab text-xl"><a href="{{ route('home') }}">Главная</a></li>
            @endif
            @if(request()->route()->getName() == 'news')
                <li class="tab tab-active text-xl"><a href="{{ route('news') }}">Новости</a></li>
            @else
                <li class="tab text-xl"><a href="{{ route('news') }}">Новости</a></li>
            @endif
            @if(request()->route()->getName() == 'jobs')
                <li class="tab tab-active text-xl"><a href="{{ route('jobs') }}">Вакансии</a></li>
            @else
                <li class="tab text-xl"><a href="{{ route('jobs') }}">Вакансии</a></li>
            @endif
            @if(request()->route()->getName() == 'resumes')
                <li class="tab tab-active text-xl"><a href="{{ route('resumes') }}">Резюме</a></li>
            @else
                <li class="tab text-xl"><a href="{{ route('resumes') }}">Резюме</a></li>
            @endif
            @if(isset(auth()->user()->role_id) && auth()->user()->role_id == 1)
                    <li class="tab text-xl"><a href="{{ route('admin.main') }}">Админка</a></li>
            @endif
        </ul>
    </div>
    <div class="navbar-end hidden md:flex">
        @guest
            <a class="btn btn-sm btn-primary mr-2 border-0" href="{{ route('login') }}">Вход</a>
            <a class="btn btn-sm btn-outline btn-primary" href="{{ route('register') }}">Регистрация</a>
        @endguest
        @auth
            <a class="btn btn-sm btn-primary mr-2 border-0" href="{{ route('cabinet.main') }}">Кабинет</a>
            <a class="btn btn-sm btn-outline btn-primary" href="{{ route('logout') }}">Выйти</a>
        @endauth
    </div>
</div>
