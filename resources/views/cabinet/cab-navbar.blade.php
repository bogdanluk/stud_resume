<div class="navbar bg-base-100 border-b-2 border-gray-200 dark:border-slate-600 dark:bg-slate-800 rounded-b-md p-2 sticky top-0">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-base-100 dark:bg-slate-700 rounded-box w-52">
                <li class="text-lg py-1 px-2 mx-2 hover:text-white hover:bg-violet-400 rounded-lg"><a href="{{ route('home') }}">Главная</a></li>
                @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                    @if(request()->route()->getName() == 'cabinet.resume-list')
                        <li class="text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('cabinet.resume-list') }}">Мои резюме</a></li>
                    @else
                        <li class="text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('cabinet.resume-list') }}">Мои резюме</a></li>
                    @endif
                @endif
                @if(auth()->user()->role_id == 3 || auth()->user()->role_id == 1)
                    @if(request()->route()->getName() == 'cabinet.job-list')
                        <li class="text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 link rounded-lg"><a href="{{ route('cabinet.job-list') }}">Мои вакансии</a></li>
                    @else
                        <li class="text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('cabinet.job-list') }}">Мои вакансии</a></li>
                    @endif
                @endif
                <li class="text-lg py-1 px-2 mx-2 hover:text-white hover:bg-violet-400 rounded-lg"><a href="{{ route('logout') }}">Выйти</a></li>
            </ul>
        </div>
        <a class="text-xl">Кабинет</a>
        <button class="ml-5 text-xl" data-toggle-theme="dark,light" data-act-class="light" id="btntheme"><i class="fa-regular fa-moon" id="themetoggler"></i></button>
    </div>
    <div class="navbar-center hidden md:flex dark:bg-slate-800">
        <ul class="menu menu-horizontal px-1">
            <li class="text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('home') }}">Главная</a></li>
            @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                @if(request()->route()->getName() == 'cabinet.resume-list')
                    <li class="text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('cabinet.resume-list') }}">Мои резюме</a></li>
                @else
                    <li class="text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg"><a href="{{ route('cabinet.resume-list') }}">Мои резюме</a></li>
                @endif
            @endif
            @if(auth()->user()->role_id == 3 || auth()->user()->role_id == 1)
                @if(request()->route()->getName() == 'cabinet.job-list')
                    <li class="text-lg active py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg link"><a href="{{ route('cabinet.job-list') }}">Мои вакансии</a></li>
                @else
                    <li class="text-lg py-1 px-2 mx-2 transition-all ease-in hover:text-white hover:bg-violet-400 rounded-lg "><a href="{{ route('cabinet.job-list') }}">Мои вакансии</a></li>
                @endif
            @endif
        </ul>
    </div>
    <div class="navbar-end hidden md:flex">
        <a class="btn text-white btn-sm bg-violet-400 mr-2 hover:bg-violet-600" href="{{ route('logout') }}">Выйти</a>
    </div>
</div>
