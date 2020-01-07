@if ($paginator->hasPages())
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="prev" aria-hidden="true"><i class="flaticon-left-arrow"></i></a>
                </li>
            @else
                <li>
                    <a class="prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="flaticon-left-arrow"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="d-block d-sm-block d-md-block d-lg-block disabled" aria-disabled="true"><a>{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="d-block d-sm-block d-md-block d-lg-block active" aria-current="page"><a>{{ $page }}</a></li>
                        @else
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="{{ $url."#jobs" }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="flaticon-right-arrow"></i></a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="next" aria-hidden="true"><i class="flaticon-right-arrow"></i></a>
                </li>
            @endif
        </ul>
@endif
