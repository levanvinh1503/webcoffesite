<!DOCTYPE HTML>
<html>

<head>
    <title>Login - Webcoffesite</title>
    <!-- Meta-Tags -->
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/spQbz2A.png"/>
    <!-- Stylesheets -->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel='stylesheet' type='text/css' />
    <!--// Stylesheets -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <h1>Đăng nhập</h1>
    <div class="clear-loading spinner">
        <span></span>
    </div>
    <div class="w3ls-login box box--big">
        <!-- form starts here -->
        <form action="{{ route('login') }}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if ($errors->has('errlogin'))
            <div class="agile-field-txt">
                <p style="color: red">{{ $errors->first('errlogin')}}</p>
            </div>
            @endif
            <div class="agile-field-txt">
                <label><i class="fa fa-user" aria-hidden="true"></i> Tên đăng nhập </label>
                <input type="text" name="username-login" id="username-login" placeholder="Nhập tên đăng nhập" required="" />
                @if($errors->has('username-login'))
                <p style="color: red">{{ $errors->first('username-login') }}</p>
                @endif
            </div>
            <div class="agile-field-txt">
                <label><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mật khẩu </label>
                <input type="password" name="password-login" placeholder="Nhập mật khẩu" required="" id="password-login" />
                @if($errors->has('password-login'))
                <p style="color: red">{{ $errors->first('password-login') }}</p>
                @endif
                <div class="agile_label">
                    <input id="check3" name="check3" type="checkbox" value="show-password" onclick="myFunction()">
                    <label class="check" for="check3">Hiển mật khẩu</label>
                </div>
            </div>
            <!-- script for show password -->
            <script>
                function myFunction() {
                    var x = document.getElementById("password-login");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
            <!-- //end script -->
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
    <!-- //form ends here -->
</body>
</html>