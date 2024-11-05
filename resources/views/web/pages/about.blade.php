@extends('web.layouts.container')
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area _relative">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ __('web.about_us') }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.about_us') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============= pages-hero-area ============-->

    <!--============= about-page-sec-about-start ============-->

    <div class="about-page-about-sec sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-page-img-all">
                        <div class="about-page-about-img1 img-border img100">
                            <img src="{{ url('') }}/assets/web/img/image/about-page-img-1.png" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-page-img-2 img-border img100">
                                    <img src="{{ url('') }}/assets/web/img/image/about-page-img-2.png" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="about-page-img-3 img-border img100 space-sm-30">
                                    <img src="{{ url('') }}/assets/web/img/image/about-page-img-3.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-haddings">
                        <div class="hadding hadding-p space-sm-30">
                            <span class="span">Who we Are</span>
                            <h1>We Prepare Federal, And <br> State Income Tax Returns <br> <span>Individuals
                                    Businesses.</span></h1>
                            <p>As tax specialists, we are completely computerized and use e-file services for IRS,
                                California Franchise Tax Board, and out-of-state tax returns to Tax Consultant to Consultore
                                Full Range. </p>
                            <div class="space20"></div>
                            <p>
                                Please feel free to browse our website to see the tax services we offer as well as the many
                                helpful resources we provide.</p>
                        </div>

                        <div class="check-list-all">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> IRS
                                            Tax Problems</p>
                                    </div>
                                    <div class="space20"></div>
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt="">
                                            Payroll Services</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt=""> Tax
                                            Prepration and Planning
                                        </p>
                                    </div>
                                    <div class="space20"></div>
                                    <div class="chek-list">
                                        <p><img src="{{ url('') }}/assets/web/img/icons/check.svg" alt="">
                                            Bookkeeping and Virtual CFO
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-btn-1 button btn-after home1-button">
                            <a href="#">Explore More About Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--============= about-page-sec-about-end ============-->

    <!--============= about-page-sec-what-we-do-start ============-->
    <div class="what-we-do sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="hadding hadding-p">
                        <span class="span">What We Do</span>
                        <h1>We Can Help Resolve All Of Your Income <span>Tax Issues.</span></h1>
                        <p>As tax specialists, we are completely computerized and use e-file services for IRS, California
                            Franchise Tax Board, and out-of-state.</p>
                    </div>
                    <div class="space10"></div>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="preview-counter text-center hadding-p">
                                <h1><span class="counter-up">20</span>+</h1>
                                <p>Years of Experience</p>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="preview-counter text-center hadding-p">
                                <h1><span class="counter-up">25</span>K</h1>
                                <p>Happy Clients</p>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="preview-counter text-center hadding-p">
                                <h1><span class="counter-up">15</span>K</h1>
                                <p>Client Served</p>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="preview-counter text-center hadding-p">
                                <h1><span class="counter-up">100</span>%</h1>
                                <p>Client Satisfaction</p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-page-img img-border space-sm-30">
                        <img src="{{ url('') }}/assets/web/img/image/about-what-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--============= about-page-sec-what-we-do-end ============-->
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
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-1.svg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{ __('web.book_keeping_and_virtual_CFO') }}</h2>
                                    <p>{{ __('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial') }}
                                    </p>
                                </div>
                            </div>

                            <div class="work-item" data-aos="fade-right" data-aos-duration="1200">
                                <div class="">
                                    <div class="work-icon">
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-2.svg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{ __('web.Tax_Prepration_and_Planning') }}</h2>
                                    <p>{{ __('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial') }}
                                    </p>
                                </div>
                            </div>

                            <div class="work-item" data-aos="fade-right" data-aos-duration="1400">
                                <div class="">
                                    <div class="work-icon">
                                        <img src="{{ url('') }}/assets/web/img/icons/works-icon-3.svg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="hadding hadding-p">
                                    <h2>{{ __('web.IRS_Tax_Problems') }}</h2>
                                    <p>{{ __('web.we_are_fortunate_to_have_a_team_in_which_a_each_passionate_of_his_work_At_HQ_Tax_Financial') }}
                                    </p>
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

    <!--============= our-vision-start ============-->
    <div class="our-vision sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <div class="hadding">
                        <span class="span">Our Vision</span>
                        <h1>We Review Your Tax Returns To Create a Formal <span>Tax Strategy</span></h1>
                    </div>
                </div>
                <div class="space-30"></div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="about-vision-box box-after">
                            <div class="about-vision-img">
                                <img src="{{ url('') }}/assets/web/img/icons/about-vision-icon-1.svg"
                                    alt="">
                            </div>
                            <div class="space20"></div>
                            <div class="hadding hadding-p">
                                <h4><a href="#">More Better Tax <br> Consultant</a></h4>
                                <div class="space10"></div>
                                <p>We prepare federal, and state income tax returns for the an small businesses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="about-vision-box box-after">
                            <div class="about-vision-img">
                                <img src="{{ url('') }}/assets/web/img/icons/about-vision-icon-2.svg"
                                    alt="">
                            </div>
                            <div class="space20"></div>
                            <div class="hadding hadding-p">
                                <h4><a href="#">24/7 All Time Customer Service</a></h4>
                                <div class="space10"></div>
                                <p>We prepare federal, and state income tax returns for the an small businesses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="about-vision-box box-after">
                            <div class="about-vision-img">
                                <img src="{{ url('') }}/assets/web/img/icons/about-vision-icon-3.svg"
                                    alt="">
                            </div>
                            <div class="space20"></div>
                            <div class="hadding hadding-p">
                                <h4><a href="#">Great World Record Awards</a></h4>
                                <div class="space10"></div>
                                <p>We prepare federal, and state income tax returns for the an small businesses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="about-vision-box box-after">
                            <div class="about-vision-img">
                                <img src="{{ url('') }}/assets/web/img/icons/about-vision-icon-4.svg"
                                    alt="">
                            </div>
                            <div class="space20"></div>
                            <div class="hadding hadding-p">
                                <h4><a href="#">Easy Consult Working Process</a></h4>
                                <div class="space10"></div>
                                <p>We prepare federal, and state income tax returns for the an small businesses.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--============= our-vistion-end ============-->
@endsection
