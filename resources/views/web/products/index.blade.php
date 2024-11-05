@extends('web.layouts.container')
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ __('web.products') }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.products') }}</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--============= pages-hero-area ============-->

    <!--============= shop-start ============-->
    <div class="shop-page sec-padding">
        <div class="container">
            <div class="row">
                @foreach ($products as $row)
                    @include('web.component.productComponent', ['product' => $row])
                @endforeach


            </div>
        </div>

        <div class="space50"></div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($products->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">{{ __('web.previous') }}</span>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">{{ __('web.previous') }}</span>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($products->links()->elements[0] as $page => $url)
                    @if ($page == $products->currentPage())
                        <li class="page-item active">
                            <a class="page-link page-active" href="#">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($products->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">{{ __('web.next') }}</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">{{ __('web.next') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>


    </div>

    <!--============= shop-end ============-->
@endsection
