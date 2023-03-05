<footer class="footer p-5 bg-base-200 dark:bg-slate-700">
    <div>
        <span class="footer-title">Навигация</span>
        <a href="{{route('home')}}" class="link link-hover">Главная</a>
        <a href="{{route('news')}}" class="link link-hover">Новости</a>
        <a href="{{route('jobs')}}" class="link link-hover">Вакансии</a>
        <a href="{{route('resumes')}}" class="link link-hover">Резюме</a>
    </div>

    <div>
        <span class="footer-title">Информация</span>
        <a href="{{ route('nalog') }}" class="link link-hover">Налоги</a>
        <p>StudResume © 2023 - Все права защищены.</p>
    </div>

    <div>
        <span class="footer-title">Соцсети</span>
        <div class="grid grid-flow-col gap-4">
            <a href="https://vk.com/studresumednr" class="text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-vk "></i></a>
            <a href="https://github.com/bogdanluk/stud_resume" class="text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-github"></i></a>
            <a href="https://t.me/studresume" class="text-4xl text-violet-400 hover:text-violet-600 transition"><i class="fa-brands fa-telegram"></i></a>
        </div>
    </div>
</footer>
