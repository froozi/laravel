@if ($paginator->hasPages())

    <!-- Pagination -->
    <ul class="actions pagination">
        <li class="arrow_left"><a href="{{ $paginator->previousPageUrl() }}" class="button large previous"><span>‹</span></a></li>
        <li class="arrow_right"><a href="{{ $paginator->nextPageUrl() }}" class="button large next"><span>›</span></a></li>
    </ul>

@endif
