@if ($paginator->hasPages())
    <div class="btn-group items-center">
        @if ($paginator->onFirstPage())
            <span class="btn text-slate-200 text-xl border-2 border-slate-200 cursor-default dark:border-slate-900 dark:text-slate-900"><i class="fa-solid fa-angles-left"></i></span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn text-xl text-slate-400 border-2 border-slate-400 hover:text-violet-400 hover:border-violet-400 hover:border-2 focus:ring outline-none focus:ring-violet-400 transition"><i class="fa-solid fa-angles-left"></i></a>
        @endif

        <span class="btn border-2 text-xl font-semibold border-slate-400 text-slate-400 cursor-default">{{ $paginator->currentPage() }}</span>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn text-slate-400 text-xl border-2 border-slate-400 hover:text-violet-400 hover:border-violet-400 hover:border-2 focus:ring outline-none focus:ring-violet-400 transition"><i class="fa-solid fa-angles-right"></i></a>
        @else
            <span class="btn text-slate-300 text-xl border-2 border-slate-300 cursor-default dark:border-slate-900 dark:text-slate-900"><i class="fa-solid fa-angles-right"></i></span>
        @endif
    </div>
@endif
