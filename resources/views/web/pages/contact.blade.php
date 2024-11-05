@extends('web.layouts.container')
@section('content')
    <!--============= pages-hero-area ============-->
    <div class="inner-page-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <div class="hadding hadding-sec">
                        <h1>{{ __('web.contact_us') }}</h1>
                        <h6>{{ __('web.home') }} > {{ __('web.contact') }}</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--============= pages-hero-area ============-->

    <div class="row">
        <div class="col-md-8 m-auto text-center">
            <div class="hadding hadding-sec">
                <h1>{{ __('web.saudia') }}</h1>
            </div>
        </div>
    </div>
    <div class="contact-page-contact sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-2.svg" alt="">
                        </div>
                        <h4>{{ __('web.phone_numbers') }}</h4>
                        <a href="tel:966555091941">CALL: 055-509-1941</a>
                        <a href="tel:966555091971">CALL: 055-509-1941</a>
                        <a href="https://wa.link/80sa0h">WA: 010-707-00086</a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-1.svg" alt="">
                        </div>

                        <h4>{{ __('web.location') }}</h4>
                        <p>{{ __('web.saudia_location') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-3.svg" alt="">
                        </div>
                        <h4>{{ __('web.social_media') }}</h4>
                        <div class="row">
                            <div class="col-2"><a href="{{ settings('x_sa') }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="col-2"><a href="{{ settings('facebook_sa') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                            <div class="col-2"><a href="{{ settings('instagram_sa') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                            <div class="col-2"><a href="{{ settings('tiktok_sa') }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></div>
                            <div class="col-2"><a href="{{ settings('linkedin_sa') }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
                            <div class="col-2"><a href="{{ settings('snapchat_sa') }}" target="_blank"><i class="fa-brands fa-snapchat"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-3.svg" alt="">
                        </div>
                        <h4>{{ __('web.email_') }}</h4>
                        <a href="mailto:info@apex-telecom.net">info@apex-telecom.net</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="space100"></div>


    </div>
    <div class="row">
        <div class="col-md-8 m-auto text-center">
            <div class="hadding hadding-sec">
                <h1>{{ __('web.egypt') }}</h1>
            </div>
        </div>
    </div>
    <div class="contact-page-contact sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-2.svg" alt="">
                        </div>
                        <h4>{{ __('web.phone_numbers') }}</h4>
                        <a href="tel:0572424940">CALL: 057-242-4940</a>
                        <a href="tel:0572424941">CALL: 057-242-4941</a>
                        <a href="https://wa.link/ub4ffl">WA: 010-707-00086</a>
                        <a href="https://wa.link/l363c3">WA: 010-707-00063</a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-1.svg" alt="">
                        </div>

                        <h4>{{ __('web.location') }}</h4>
                        <p>{{ __('web.egypt_location') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-3.svg" alt="">
                        </div>
                        <h4>{{ __('web.social_media') }}</h4>
                        <div class="row">
                            <div class="col-2"><a href="{{ settings('x_eg') }}"  target="_blank"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="col-2"><a href="{{ settings('facebook_eg') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                            <div class="col-2"><a href="{{ settings('instagram_eg') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                            <div class="col-2"><a href="{{ settings('tiktok_eg') }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></div>
                            <div class="col-2"><a href="{{ settings('linkedin_eg') }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
                            <div class="col-2"><a href="{{ settings('snapchat_eg') }}" target="_blank"><i class="fa-brands fa-snapchat"></i></a></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="home4-contact-box contact-page-box box-after">
                        <div class="contact-iocn">
                            <img src="{{ url('') }}/assets/web/img/icons/home4-contact-iocn-3.svg" alt="">
                        </div>
                        <h4>{{ __('web.email_') }}</h4>
                        <a href="mailto:info@apex-telecom.net">info@apex-telecom.net</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space100"></div>


    </div>
@endsection
