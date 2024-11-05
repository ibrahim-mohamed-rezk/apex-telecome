@extends('web.layouts.container')
@section('styles')
    <style>
        .container-element {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .card {
            padding: 3rem 2rem 1.5rem 2rem;
            background: rgb(255 255 255 / 95%);
            box-shadow: 6px 8px 15px 3px rgb(64 64 64 / 11%);
            border-radius: 20px;
            min-height: 350px;
            border: none;
        }

        .card:hover {
            background-color: #d4aeff;

            .card-image {
                background-color: #fff !important;
            }

            .typography h4,
            .typography p {
                color: #fff !important;
            }
        }

        .card-image {
            margin-bottom: 30px;
            width: 120px;
            height: 120px;
            margin-left: auto;
            margin-right: auto;
            padding: 1rem;
            border: solid 1px #eee;
            border-radius: 50%;
            display: flex !important;
            justify-content: center;
            align-items: center;
            box-shadow: 6px 7px 12px 6px rgb(229 235 239 / 65%);
        }

        .typography {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

            h4 {
                font-size: 22px;
                color: #303030;
                line-height: 1.3em;
                font-weight: 700;
                font-style: normal;
                letter-spacing: 0;
                font-family: "Montserrat", sans-serif !important;
                text-align: center;
            }

            p {
                color: grey;
                font-size: 15px;
                line-height: 26px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: 0;
                margin: 14px 0 0;
                font-family: "Montserrat", sans-serif !important;
                text-align: center;
            }
        }
    </style>
@endsection
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ $service->title }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.our_Service') }} > {{ $service->title }}</h6>
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
                        <form action="{{ route('web.services') }}">
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
                            <h2>{{ __('web.other_services') }}</h2>
                        </div>
                        <div class="service-details-list">
                            <ul>
                                @foreach ($related_services as $row)
                                    @include('web.component.relatedProductCompoment', ['product' => $row])
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
                            <a href="{{ $service->brochure }}" download>{{ __('web.download_brochure') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="service-details-all">
                        <div class="service-details-img img-border">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="hadding hadding-p">
                            {!! $service->description !!}
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
                        <h1><span style="color: white">{{ __('web.features') }}</span></h1>
                    </div>
                </div>
            </div>
            <div class="space20"></div>
            <div class="container-element">
                @foreach ($service->features as $row)
                    @include('web.component.featureCompoment', ['feature' => $row])
                @endforeach

            </div>
        </div>

    </div>

    <!--=====service-end=======-->
@endsection
