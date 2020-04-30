<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.css.map')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('admin::layouts.sidebar')

        @yield('content')
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.4
            </div>
        </footer>
    </div>
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('backend/dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('backend/dist/js/pos-system-2020.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script> CKEDITOR.replace( 'product_content' );</script>
    <script> CKEDITOR.replace( 'post_content' );</script>
    @yield('scripts')
</body>
</html>
