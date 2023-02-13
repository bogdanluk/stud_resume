<div class="navbar bg-base-100 border-b-2 border-gray-200 dark:border-slate-600 dark:bg-slate-800 rounded-md p-2">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-base-100 dark:bg-slate-700 rounded-box w-52">
                <li class="text-lg link link-hover hover:text-violet-400"><a href="{{ route('logout') }}">Выйти</a></li>
                <li class="text-lg link link-hover hover:text-violet-400"><a href="{{ route('home') }}">Главная</a></li>
                @if(request()->route()->getName() == 'cabinet.news-list')
                    <li class="mr-2 text-lg link link-hover active hover:text-violet-400"><a href="{{ route('cabinet.news-list') }}">Список постов</a></li>
                @else
                    <li class="mr-2 text-lg link link-hover hover:text-violet-400"><a href="{{ route('cabinet.news-list') }}">Список постов</a></li>
                @endif
            </ul>
        </div>
        <a class="text-xl dark:text-white">Кабинет</a>
    </div>
    <div class="navbar-center hidden md:flex dark:bg-slate-800">
        <ul class="menu menu-horizontal px-1">
            <li class="mr-2 text-lg link link-hover hover:text-violet-400"><a href="{{ route('home') }}">Главная</a></li>
            @if(request()->route()->getName() == 'cabinet.news-list')
                <li class="mr-2 text-lg link link-hover active hover:text-violet-400"><a href="{{ route('cabinet.news-list')  }}">Список постов</a></li>
            @else
                <li class="mr-2 text-lg link link-hover hover:text-violet-400"><a href="{{ route('cabinet.news-list') }}">Список постов</a></li>
            @endif
        </ul>
    </div>
    <div class="navbar-end hidden md:flex">
        <a class="btn text-white btn-sm bg-violet-400 mr-2 hover:bg-violet-600" href="{{ route('logout') }}">Выйти</a>
    </div>
</div>
