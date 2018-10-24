<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webcoffeesite</title>
    
    <!-- Meta tag Keywords -->
    <meta charset="utf-8">
    <!--// Meta tag Keywords -->
    
    <!-- css files -->
    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/spQbz2A.png"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <!-- //css files -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" /><!-- for testimonials -->

    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//web font-->
</head>
<body>

    @include('layout.header')

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    @include('layout.footer')

    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->   

    <!-- Stats-Number-Scroller-Animation-JavaScript -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script> 
    <script src="{{ asset('js/counterup.min.js') }}"></script> 
    <!-- js -->
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 100,
                time: 1000
            });
        });
    </script>
    <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    <!-- Banner Responsiveslides -->
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->

    <!-- start-smoth-scrolling -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->

    <!-- FlexSlider-JavaScript -->
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider-JavaScript -->
    <!--open img big-->
    <script>
        $(".buttontemplate").click(function(){
            $(".mydesignbyself").css("display","block");
            $(".img01").attr('src',$(this).attr('src'));
        });
        $(".myImg").click(function(){
            $(".mydesignbyself").css("display","block");
            $(".img01").attr('src',$(this).attr('src'));
        });

        $(".close").click(function(){
            $(".mydesignbyself").css("display","none");
        });
    </script>
    <!--end open img big-->
    <script type="text/javascript">
        var idmenu = 1;
        $(".cube").each(function(){
            $(this).attr("id","a"+idmenu);
            idmenu ++;
        });
    </script>
    <script type="text/javascript">
        var $el = $(".cube");
        var rotate = function(index){
            var index = index || 0;
            $el.each(function(e){
                $(this).attr("data-rotate",Math.abs($(this).index() - index));
            });
        }
        $el.hover(function(e){
            var index = $(this).index();
            rotate(index);
        });
        rotate(0);
    </script>
    <script type="text/javascript">
        $(".btn-menuleft").click(function(){
            if($(this).attr("id") =="false"){
                $(this).attr("id","true");
                $(this).css("left","21%");
                $(".wrapcube").css("left","30px");
            }
            else
            {
                $(this).attr("id","false");
                $(this).css("left","0px");
                $(".wrapcube").css("left","-20%");
            }
        });
    </script>
    <script>
        $(".front").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("." + $(this).attr("id")).offset().top
            }, 1000);
        });
    </script>
    @yield('script')
</body>
</html>