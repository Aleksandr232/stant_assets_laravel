@if ($paginator->hasPages())
    <div class="container_pages">
        @if ($paginator->onFirstPage())
            <button class="container_pages-button pages_button-active">1</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="container_pages-button">1</a>
        @endif

        @for ($i = 2; $i <= $paginator->lastPage(); $i++)
            @if ($i == $paginator->currentPage())
                <button class="container_pages-button pages_button-active">{{ $i }}</button>
            @else
                <a href="{{ $paginator->url($i) }}" class="container_pages-button">{{ $i }}</a>
            @endif
        @endfor

        @if ($paginator->hasMorePages())
            <span class="container_pages-more">. . .</span>
            <a href="{{ $paginator->nextPageUrl() }}" class="container_pages-button">{{ $paginator->lastPage() }}</a>
        @endif
    </div>
@endif
