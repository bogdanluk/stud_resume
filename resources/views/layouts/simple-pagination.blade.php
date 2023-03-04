@if ($paginator->hasPages())
    <div class="btn-group items-center">
        @if ($paginator->onFirstPage())
            <span class="btn btn-outline btn-primary btn-disabled text-xl"><i class="fa-solid fa-angles-left"></i></span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-outline btn-primary text-xl"><i class="fa-solid fa-angles-left"></i></a>
        @endif

        <span class="btn btn-outline btn-primary font-semibold text-xl">{{ $paginator->currentPage() }}</span>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-outline btn-primary text-xl"><i class="fa-solid fa-angles-right"></i></a>
        @else
            <span class="btn btn-outline btn-primary btn-disabled text-xl"><i class="fa-solid fa-angles-right"></i></span>
        @endif
    </div>
@endif
