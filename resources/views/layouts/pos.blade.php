<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Website bán chuối</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-icon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/custom-slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/custom-slider/css/preview.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/pos-system.css')}}">
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="home-one">
    @include('components.header')
    @yield('content')
    <!-- FOOTER START -->
    @include('components.footer')
    <!-- FOOTER END -->

    <!-- JS -->

    <!-- jquery-1.11.3.min js
		============================================ -->
    <script src="{{asset('frontend/js/vendor/jquery-1.11.3.min.js')}}"></script>

    <!-- bootstrap js
		============================================ -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!-- Nivo slider js
		============================================ -->
    <script src="{{asset('frontend/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/custom-slider/home.js')}}" type="text/javascript"></script>

    <!-- owl.carousel.min js
		============================================ -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

    <!-- jquery scrollUp js 
		============================================ -->
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>

    <!-- price-slider js
		============================================ -->
    <script src="{{asset('frontend/js/price-slider.js')}}"></script>

    <!-- elevateZoom js 
		============================================ -->
    <script src="{{asset('frontend/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

    <!-- jquery.bxslider.min.js
		============================================ -->
    <script src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>

    <!-- mobile menu js
		============================================ -->
    <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>

    <!-- wow js
		============================================ -->
    <script src="{{asset('frontend/js/wow.js')}}"></script>

    <!-- plugins js
		============================================ -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>

    <!-- main js
		============================================ -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/front-end.js')}}"></script>
</body>

</html>