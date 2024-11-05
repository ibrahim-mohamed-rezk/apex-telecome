@extends('web.layouts.container')
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ $product->title }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.our_Service') }} > {{ $product->title }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============= pages-hero-area ============-->

    <!--============= service-details-start ============-->
    <div class="service-details sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="details-box">
                        <div class="hadding details-hadding">
                            <h2>{{ __('web.search') }}</h2>
                        </div>
                        <form action="{{ route('web.products') }}">
                            @csrf()
                            <div class="service-details-serch">
                                <div class="service-details-input">
                                    <input type="search" name="search" placeholder="{{ __('web.search_for_items') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="details-box">
                        <div class="hadding details-hadding">
                            <h2>{{ __('web.related_products') }}</h2>
                        </div>
                        <div class="service-details-list">
                            <ul>
                                @foreach ($realted_products as $row)
                                    @include('web.component.relatedProductCompoment',['product' => $row])
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="details-box">
                        <div class="hadding details-hadding">
                            <h2>{{ __('web.contact') }}</h2>
                        </div>
                        <div class="contact-details">
                            <div class="contact-details-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/contact-details-icon-1.svg"
                                    alt="">
                            </div>
                            <div class="contact-details-p hadding-p">
                                <p>{{ __('web.saudia_location') }}</p>
                            </div>
                        </div>

                        <div class="contact-details">
                            <div class="contact-details-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/contact-details-icon-2.svg"
                                    alt="">
                            </div>
                            <div class="contact-details-p hadding-p">
                                <a href="tel:966555091941">055-509-1941</a>
                            </div>
                        </div>

                        <div class="contact-details-1">
                            <div class="contact-details-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/contact-details-icon-3.svg"
                                    alt="">
                            </div>
                            <div class="contact-details-p hadding-p">
                                <p>info@apex-telecom.net</p>
                            </div>
                        </div>

                    </div>

                    <div class="details-box">
                        <div class="hadding details-hadding">
                            <h2>{{ __('web.brochure') }}</h2>
                        </div>
                        <div class="header-btn-1 button btn-after home1-button">
                            <a href="{{ $product->brochure }}" download>{{ __('web.download_brochure') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="service-details-all">
                        <div class="service-details-img img-border">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                        </div>
                        <br>
                        <div class="hadding hadding-p">
                            {!! $product->description !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============= service-details-end ============-->

    <!--=====service-start=======-->
    <div class="service sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <div class="hadding">
                        <h1><span style="color: white">{{ __('web.related_products') }}</span></h1>
                    </div>
                </div>
            </div>
            <div class="space20"></div>
            <div class="row">
                @foreach ($realted_products as $row)
                    @include('web.component.productComponent', ['product' => $row])
                @endforeach

            </div>
        </div>

    </div>

    <!--=====service-end=======-->
@endsection
