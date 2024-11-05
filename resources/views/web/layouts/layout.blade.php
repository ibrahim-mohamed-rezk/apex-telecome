<!DOCTYPE html>
<html lang="en" @if (LaravelLocalization::getCurrentLocale() == 'en') dir="ltr" @else dir="rtl" @endif>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="author" content>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="app-url" content="{{ route('web.home') }}">
    <meta property="fb:app_id" content="">
    <meta name="google-site-verification" content="" />
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <meta property="og:image" content="{{ asset('/assets/web/img/logo/titel-logo.png') }}" />
    <meta name="title" content="Apex telecom">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--=====TITLE=======-->
    <title>APEX-Telecom</title>

    <!--=====FAV ICON=======-->
    <link rel="shortcut icon" href="{{ url('') }}/storage/fav.png">

    <!--=====CSS=======-->
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/swiper.bundle.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/mobile-menu.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/aos.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/modal-video.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/typography.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/comon.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/animation.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/web/css/master9.css">

    @yield('styles')
    <!--=====JQUERY=======-->
    <script src="{{ url('') }}/assets/web/js/plugins/jquery-3-6-0.min.js"></script>
</head>

<body>


    {{-- <div id="preloader">
    <div id="loader"></div>
  </div> --}}


    <!--=====progress START=======-->

    <div class="paginacontainer" style="color:#432c8d">

        <div class="progress-wrap" style="color:#432c8d">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"
                style="color:#432c8d">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <!--=====progress END=======-->
    @yield('container')
    <!--=====JS=======-->
    <script src="{{ url('') }}/assets/web/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/swiper.bundle.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/fontawesome.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="{{ url('') }}/assets/web/js/plugins/mobile-menu.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/modal-video.min.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/jquery.nice-select.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/jquery.countup.js"></script>
    <script src="{{ url('') }}/assets/web/js/plugins/owl.carousel.min.js"></script>
    <script src="{{ url('') }}/assets/web/js/main.js"></script>


    @yield('scripts')
</body>

</html>
