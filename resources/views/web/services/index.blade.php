@extends('web.layouts.container')
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ __('web.our_Service') }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.our_Service') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============= pages-hero-area ============-->

    <!--=====service-start=======-->
    <div class="service-page-service sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <div class="hadding">
                        <span class="span">{{ __('web.our_Service') }}</span>
                        <h1>{!! __('web.offer') !!}</h1>
                    </div>
                </div>
            </div>
            <div class="space20"></div>
            <div class="row">
                @foreach ($services as $row)
                    @include('web.component.serviceComponent', ['service' => $row])
                @endforeach
            </div>
        </div>
    </div>

    <!--=====service-end=======-->


@endsection
