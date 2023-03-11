<footer class="p-3 bg-base-200 dark:bg-slate-700 mt-5">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="flex flex-col items-center">
            <span class="footer-title">Навигация</span>
            <a href="{{route('home')}}" class="link link-hover hover:text-violet-400 transition">Главная</a>
            <a href="{{route('news')}}" class="link link-hover hover:text-violet-400 transition">Новости</a>
            <a href="{{route('jobs')}}" class="link link-hover hover:text-violet-400 transition">Вакансии</a>
            <a href="{{route('resumes')}}" class="link link-hover hover:text-violet-400 transition">Резюме</a>
        </div>

        <div class="flex flex-col items-center">
            <span class="footer-title">Информация</span>
            <a href="{{ route('nalog') }}" class="link link-hover hover:text-violet-400 transition">Налоги</a>
        </div>

        <div class="flex flex-col items-center">
            <span class="footer-title">Соцсети</span>
            <div class="flex flex-row">
                <a href="https://vk.com/studresumednr"
                   class="mr-2 text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-vk "></i></a>
                <a href="https://github.com/bogdanluk/stud_resume"
                   class="mr-2 text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-github"></i></a>
                <a href="https://t.me/studresume" class="text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-telegram"></i></a>
            </div>
        </div>
    </div>
    <p class="flex flex-col text-center mt-2">StudResume © 2023 - Все права защищены.</p>
</footer>
