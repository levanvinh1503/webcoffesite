<!doctype html>
<html>
<head>
    <title>Liên hệ</title>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/spQbz2A.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- css -->
    <link href="{{ asset('css/contact.css') }}" rel='stylesheet' type='text/css' media="all" />
    <!-- /css -->
</head>
<body>
    <h2 class="agileits w3 wthree w3-agile w3-agileits agileinfo agile"></h2>
    <div class="content-w3ls agileits w3 wthree w3-agile w3-agileits agileinfo agile" style="position: relative;">
        <a style="color: white; position: absolute; top: 10px; left: 10px; font-size: 30px" href="{{ route('home') }}" title="Trang chủ">
            <i class="fas fa-arrow-circle-left"></i>
        </a>
        <form action="{{ route('home-contact') }}" method="post" class="form-agileits">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if(Session::has('thanhcong'))
            <div class="alert alert-success"><p style="color: red">{{Session::get('thanhcong')}}</p></div>
            @endif
            <h2>Liên hệ với chúng tôi</h2>
            <input type="text" id="name" name="name" placeholder="Họ và tên" title="Nhập họ tên" required="">
            <input type="email" id="email" name="email" placeholder="Email" title="Nhập email" required="">
            <input type="text" id="title" name="title" placeholder="Tiêu đề" title="Nhập tiêu đề" required="">
            <input type="text" id="phone" name="phone" placeholder="Số điện thoại" title="Nhập số điện thoại" required="">
            <textarea id="message" name="message" placeholder="Nội dung" title="Nhập nội dung"></textarea>
            <input type="submit" class="sign-in" value="Gửi">
        </form>
    </div>
</body>
</html>
