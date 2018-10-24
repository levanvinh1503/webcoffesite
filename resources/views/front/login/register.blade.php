<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body style="background: #eee">
    <!-- Login -->
    <div class="wrapper">
        <!-- Container -->
        <div class="container">
            <!-- Block form login -->
            <div class="form-signin">
                <!-- Form login -->
                <form id="form-login" method="POST" action="{{ route('register') }}" role="form">
                    <h2 class="title-login">Đăng ký</h2>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit-register" class="btn btn-primary" value="Đăng ký">
                    </div> 
                </form>
                <!-- End Form login -->
            </div>
            <!-- End block form login -->
        </div>
        <!-- End Container -->
    </div>
    <!-- Script -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
