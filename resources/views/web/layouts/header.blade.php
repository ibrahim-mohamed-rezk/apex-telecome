<!--=====HEADER START=======-->
<style>
    .form-search {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        background-color: white;
        border-radius: 8px;
        border: 1px solid #d5dfe4;
        padding: 5px;
        gap: 5px
    }

    .box-category {}

    .box-category select {
        width: 100%;
        border: none;
    }

    .searchInput,
    .searchSelect {
        width: 100%;
        border: none;
        outline: none;
        color: #425a8b;

    }
</style>
<header class="header-sticky">
    <div class="header-area-home1 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route('web.home') }}"><img src="{{ url('') }}/assets/web/img/logo/apex-logo.png"
                                    alt="apex"></a>
                        </div>
                        <div class="main-menu-ex">
                            <ul>
                                <li><a href="{{ route('web.home') }}">{{ __('web.home') }}</a>

                                </li>
                                <li><a href="{{ route('web.about_us') }}">{{ __('web.about_us') }}</a>
                                </li>
                                <li><a href="{{ route('web.products') }}">{{ __('web.products') }} </a>

                                </li>
                                <li><a href="{{ route('web.services') }}">{{ __('web.our_Service') }} </a>

                                </li>

                                <li><a href="{{ route('web.contact') }}">{{ __('web.contact') }}</a>
                                </li>


                                <li class="d-lg-none d-block"><a href="#"><img
                                            src="{{ url('') }}/assets/web/img/icons/phone.svg"
                                            alt="apex">658-593-8295</a></li>
                            </ul>
                        </div>
                        <div class="dropdown dropdown-language">
                            <button class="btn dropdown-toggle" id="dropdownPage" type="button" style="color:white"
                                data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                                @if (LaravelLocalization::getCurrentLocale() == 'en')
                                <span class="dropdown-right font-xs color-brand-3">
                                    {{ __('web.english') }}
                                </span>
                                @else
                                <span class="dropdown-right font-xs color-brand-3">
                                    {{ __('web.arabic') }}
                                </span>
                                @endif

                            </button>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage"
                                data-bs-popper="static">
                                @if (LaravelLocalization::getCurrentLocale() == 'en')
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedUrl('ar') }}">
                                    {{ __('web.arabic') }}
                                </a>
                                @else
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedUrl('en') }}">
                                    {{ __('web.english') }}
                                </a>
                                @endif

                            </ul>
                        </div>
                        {{-- <form id="searchForm" action="{{ route('web.products') }}" method="GET"
                        class="d-flex align-items-center">
                        <div class="position-relative">
                            <input type="text" id="searchInput" name="search" class="form-control"
                                placeholder="{{ __('web.search') }}">
                            <button type="submit" class="search-btn">
                                <img src="{{ url('') }}/assets/web/img/icons/search-alt-2-svgrepo-com.svg" alt="">
                            </button>
                        </div>
                        </form> --}}
                        <form class="form-search mb-3">
                            <div class="box-category">
                                <select name="category_id" class=" searchSelect">
                                    <option value="" data-select2-id="3">جميع الاقسام</option>
                                    <option value="4">غرف نوم</option>
                                    <option value="5">غرف اطفال</option>
                                    <option value="6">غرف سفرة</option>

                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input class="searchInput" name="product" type="text" placeholder="ابحث عن العناصر">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END=======-->


<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-4 d-block d-lg-none ">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="index1.html"><img src="{{ url('') }}/assets/web/img/logo/apex-logo.png" alt="apex"></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar">
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul class="mobile-nav-list">
            <li><a href="{{ route('web.home') }}">{{ __('web.home') }}</a>

            </li>
            <li><a href="{{ route('web.about_us') }}">{{ __('web.about_us') }}</a>
            </li>

            <li><a href="{{ route('web.services') }}">{{ __('web.our_Service') }} </a>

            </li>
            <li><a href="{ route('web.products') }}">{{ __('web.products') }} </a>
            </li>
            <li><a href="{{ route('web.contact') }}">{{ __('web.contact') }}</a>
            </li>
            <li><a href="tel:658-593-8295"> <img src="{{ url('') }}/assets/web/img/icons/phone.svg"
                        alt="">658-593-8295</a></li>
    </div>
</div>
<!--=====Mobile header end=======-->