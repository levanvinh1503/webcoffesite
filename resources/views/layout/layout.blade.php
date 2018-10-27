<!doctype html>
<html lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Webcoffeesite</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/spQbz2A.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bino/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bino/magnific-popup.css')}}">
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('css/bino/style.css')}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('css/bino/responsive.css')}}"/>
    @yield('css')
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>
<div class="culmn">
@include('layout.header')

@yield('content')

@include('layout.footer')
<!--Footer section-->

</div>
<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="{{asset('js/bino/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/bino/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('js/bino/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/bino/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('js/bino/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/bino/jquery.masonry.min.js')}}"></script>

<!--slick slide js -->
<script src="{{asset('css/bino/slick/slick.js')}}"></script>
<script src="{{asset('css/bino/slick/slick.min.js')}}"></script>
<script src="{{asset('js/bino/plugins.js')}}"></script>
<script src="{{asset('js/bino/main.js')}}"></script>
@yield('script')

</body>
</html>