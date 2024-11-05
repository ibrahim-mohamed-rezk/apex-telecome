@extends('web.layouts.container')
@section('content')
    <!--=====hero-area-start=======-->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="main-hadding hadding-p">
                        {!! $banners[0]->title !!}
                        {!! $banners[0]->description !!}
                        <div class="home1-header-button">
                            <div class="button btn-after contact-form-btn">
                                <button>{{ __('web.view_our_services') }}</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="header-images">
                        <div class="home1-header-img-1">
                            <img src="{{ url('') }}/assets/web/img/image/header-img-1.png" alt="">
                        </div>
                        <div class="home1-header-img-2" data-aos="zoom-in" data-aos-duration="800">
                            <img src="{{ asset($banners[0]->image) }}" alt="apex">
                        </div>
                        <div class="home1-header-img-3 aniamtion-key-1" data-aos="zoom-in" data-aos-duration="800">
                            <img src="{{ url('') }}/assets/web/img/image/header-img-3.png" alt="">
                        </div>
                        <div class="home1-header-img-4 aniamtion-key-2" data-aos="zoom-in" data-aos-duration="800">
                            <img src="{{ url('') }}/assets/web/img/image/header-img-4.png" alt="">
                        </div>
                        <div class="home1-header-img-5 aniamtion-key-1" data-aos="zoom-in" data-aos-duration="800">
                            <img src="{{ url('') }}/assets/web/img/image/header-img-5.png" alt="">
                        </div>
                        <div class="home1-header-img-6 aniamtion-key-2" data-aos="zoom-in" data-aos-duration="800">
                            <img src="{{ url('') }}/assets/web/img/image/header-img-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====hero-area-end=======-->

    <!--=====about-start=======-->
    <div class="about sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="about-img img-border">
                        <img src="{{ asset($banners[1]->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 space-sm-30" data-aos="fade-left" data-aos-duration="800">
                    <div class="about-haddings">
                        <div class="hadding hadding-p">
                            <span class="span">{{ __('web.why_choose_us') }}</span>
                            {!! $banners[1]->title !!}
                            {!! $banners[1]->description !!}
                        </div>

                        <div class="check-list-all">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> {{ __('web.services_.irs_problems') }}</p>
                                    </div>
                                    <div class="space20"></div>
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> {{ __('web.services_.payroll_services') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> {{ __('web.services_.tax_prep_planning') }}
                                        </p>
                                    </div>
                                    <div class="space20"></div>
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> {{ __('web.services_.bookkeeping_cfo') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button btn-after contact-form-btn">
                            <button>{{ __('web.explore_more_about_us') }}</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about-end=======-->

    <!--=====fact-start=======-->
    <div class="our-fact sec-padding _relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="box-before">
                        <div class="fact-box">
                            <div class="fact-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/fact-icon-1.svg" alt="">
                            </div>
                            <h1><span class="counter-up">499</span></h1>
                            <p>{{ __('web.tax_services') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="box-before">
                        <div class="fact-box">
                            <div class="fact-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/fact-icon-2.svg" alt="">
                            </div>
                            <h1><span class="counter-up">98</span></h1>
                            <p>{{ __('web.recommended') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1600">
                    <div class="box-before">
                        <div class="fact-box">
                            <div class="fact-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/fact-icon-3.svg" alt="">
                            </div>
                            <h1><span class="counter-up">94</span></h1>
                            <p>{{ __('web.satisfaction') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-duration="2000">
                    <div class="box-before">
                        <div class="fact-box">
                            <div class="fact-icon">
                                <img src="{{ url('') }}/assets/web/img/icons/fact-icon-4.svg" alt="">
                            </div>
                            <h1><span class="counter-up">46</span></h1>
                            <p>{{ __('web.international_awards') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--=====fact-end=======-->

    <!--=====service-start=======-->
    <div class="service sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center" data-aos="fade-down" data-aos-duration="800">
                    <div class="hadding">
                        <span class="span">{{ __('web.our_products') }}</span>
                        <h1>{{ __('web.we_offer_a_wide_range_of_products') }}<span style="color:white"> {{ __('web.year_round') }}</span> {{ __('web.for_every_need') }}</h1>
                    </div>
                </div>
            </div>
            <div class="space20"></div>
            <div class="row">
                @foreach ($products as $row)
                    @include('web.component.productComponent',['product'=>$row])

                @endforeach



            </div>
        </div>

    </div>

    <!--=====service-end=======-->

    <!--=====How-it-works-start=======-->
    <div class="works sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="how-in-work-sec">
                        <div class="hadding hadding-p" data-aos="fade-right" data-aos-duration="800">
                            <span class="span">{{ __('web.how_it_works') }}</span>
                            {!! $banners[2]->title !!}
                            {!! $banners[2]->description !!}
                        </div>
                        <div class="space20"></div>
                        <div class="works-items">
                            <div class="work-item" data-aos="fade-right" data-aos-duration="1000">
                                <div class="">
                                    <div class="work-icon img-border">
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-1.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{__('web.book_keeping_and_virtual_CFO')}}</h2>
                                    <p>{{__('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial')}}</p>
                                </div>
                            </div>

                            <div class="work-item" data-aos="fade-right" data-aos-duration="1200">
                                <div class="">
                                    <div class="work-icon">
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{__('web.Tax_Prepration_and_Planning')}}</h2>
                                   <p>{{__('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial')}}</p>
                                </div>
                            </div>

                            <div class="work-item" data-aos="fade-right" data-aos-duration="1400">
                                <div class="">
                                    <div class="work-icon">
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-3.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{__('web.IRS_Tax_Problems')}}</h2>
                                    <p>{{__('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6" data-aos="flip-right" data-aos-duration="1000">
                    <div class="works-img space-sm-50 img-border">
                        <img src="{{ asset($banners[2]->image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--=====How-it-works-end=======-->


    <!--=====contact-start=======-->

    <div class="contact sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="flip-left" data-aos-duration="800">
                    <div class="contact-img img-border"><img src="{{ url('') }}/storage/image4.jpg" alt=""></div>
                </div>
                <div class="col-md-6 space-sm-30" data-aos="fade-left" data-aos-duration="800">
                    <div class="hadding hadding-p">
                        <span class="span">
                            {{ __('web.contact_us') }}
                        </span>
                        <h1>{{ __('web.please_fill_out_this_form_to_and_we_will') }} <span style="color:white;">{{ __('web.get_in_touch') }}.</span></h1>

                    </div>
                    <div class="space30"></div>
                    <form action="#">
                        <div class="contact-form">
                            <div class="contact-from-input">
                                <input type="text" class="form-control" name="name" placeholder="{{ __('web.full_name') }}">
                                <input type="text" class="form-control" name="email" placeholder="{{ __('web.email') }}">
                            </div>
                            <div class="contact-from-input">
                                <input type="number" class="form-control" name="phone" placeholder="{{ __('web.phone') }}">
                                <input type="text" class="form-control" placeholder="{{ __('web.subject') }}">
                            </div>
                            <div class="contact-from-input">
                                <textarea cols="30" class="form-control" rows="4" placeholder="{{ __('web.message') }}"></textarea>
                            </div>
                            <div class="space20"></div>
                            <div class="button btn-after contact-form-btn">
                                <button>{{ __('web.send_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=====contact-end=======-->


@endsection
