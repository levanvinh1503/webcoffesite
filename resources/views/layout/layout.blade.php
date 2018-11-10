<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/new/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/style.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/new/reset.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/new/responsive.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/new/navtab.css')}}">
    <script type="text/javascript" src="{{asset('js/new/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/new/tabmenu.js')}}"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1916689885307106&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>


@include('layout.header')

@yield('content')

@include('layout.footer')


<a href="javascript:;" class="scroll-top-link" id="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<script src="{{asset('js/new/progressbar.min.js')}}"></script>
<script src="{{asset('js/new/MSDropDown/jquery.dd.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('js/new/MSDropDown/dd.css')}}">
<script src="{{asset('js/new/slick/slick.min.js')}}"></script>
<script src="{{asset('js/new/wow.min.js')}}"></script>
<script src="{{asset('js/new/master.js')}}"></script>
<script type="text/javascript">
    $('.group-banner').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: '<button class="slick-prev-banner" aria-label="Previous" type="button"><span></span><i class="fa fa-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next-banner" aria-label="Next" type="button"><span></span><i class="fa fa-chevron-right"></i></button>'

    });
</script>
<script>
    jQuery(document).ready(function () {

        var wow = new WOW(
            {
                boxClass: 'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 150,          // distance to the element when triggering the animation (default is 0)
                mobile: false,       // trigger animations on mobile devices (default is true)
                live: true,       // act on asynchronously loaded content (default is true)
                callback: function (box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                },
                scrollContainer: null,    // optional scroll container selector, otherwise use window,
                resetAnimation: true,     // reset animation on end (default is true)
            }
        );
        wow.init();

        //
        $("#brand-source").msDropdown();

        //
        var iniTab = $('.list-nav-tabswap li.active .tabswap-btn').attr('src-navtab');
        if (!!iniTab) {
            $('.nav-tabswap-ct ' + iniTab).show().siblings().hide();
            $('.list-nav-tabswap').on('click', '.tabswap-btn', function (e) {
                e.preventDefault();
                var srcTab = $(this).attr('src-navtab');
                $(this).parent().addClass('active').siblings().removeClass('active');
                $('.nav-tabswap-ct ' + srcTab).fadeIn().siblings().hide();
            })
        }

        if($('.canvas-circle').length) {
            $('.canvas-circle').each(function (index, element) {
                var percent = parseFloat($(element).attr('data-percent'));
                var bar = new ProgressBar.Circle(element, {
                    color: 'rgb(255, 207, 78)',
                    trailColor: '#707070',
                    strokeWidth: 5,
                    trailWidth: 1,
                    easing: 'easeInOut',
                    duration: 1400,
                    text: {
                        autoStyleContainer: false
                    },
                    step: function(state, circle) {
                    }
                });
                bar.animate(percent);
            })

        }
    });
</script>
</body>

</html>