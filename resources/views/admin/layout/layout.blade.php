<!DOCTYPE HTML>
<html>
<head>
    <title>Admin - Webcoffeesite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>

    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/spQbz2A.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/admin/bootstrap.css') }}" rel='stylesheet' type='text/css'/>

    <!-- Custom CSS -->
    <link href="{{ asset('css/admin/style.css') }}" rel='stylesheet' type='text/css'/>

    <!-- font-awesome icons CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='{{ asset('css/admin/SidebarNav.min.css') }}' media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->


    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
    rel="stylesheet">
    <!--//webfonts-->

    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <!--//Metis Menu -->
    <!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="{{ route('indexadmin') }}"><span class="fa fa-area-chart"></span>
                        Admin<span class="dashboard_text">Dashboard</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">DASHBOARD</li>
                            <li class="treeview">
                                <a href="{{ route('indexadmin') }}">
                                    <i class="fas fa-home"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fas fa-tasks"></i>
                                    <span>Chuyên mục</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('list-category') }}"><i class="fa fa-angle-right"></i> Danh sách
                                        chuyên mục</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('add-category') }}"><i class="fa fa-angle-right"></i> Thêm chuyên
                                        mục</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                    <span>Bài viết</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('list-post') }}">
                                            <i class="fa fa-angle-right"></i> Danh sách bài viết
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('add-post') }}">
                                            <i class="fa fa-angle-right"></i> Thêm bài viết
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fas fa-paste"></i> <span>Nhóm sản phẩm</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('list-collection') }}"><i class="fa fa-angle-right"></i> Danh sách
                                    nhóm sản phẩm</a></li>
                                    <li><a href="{{ route('add-collection') }}"><i class="fa fa-angle-right"></i> Thêm sản
                                    phẩm</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fas fa-clone"></i> <span>Sản phẩm</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('list-product') }}"><i class="fa fa-angle-right"></i> Danh sách
                                    sản phẩm</a></li>
                                    <li><a href="{{ route('add-product') }}"><i class="fa fa-angle-right"></i> Thêm sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="{{ route('list-user') }}">
                                    <i class="fas fa-users"></i> <span>Account </span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{ route('mail-inbox') }}">
                                    <i class="fa fa-envelope"></i> <span>Mailbox </span>
                                    <span class="label label-primary1 pull-right">{{ $countNotificatioin }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
        </div>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <div class="profile_details_left"><!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">{{ $countNotificatioin }}</span>
                            </a>
                            @if ($countNotificatioin > 0)
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>{{ $countNotificatioin }} liên hệ chưa đọc</h3>
                                    </div>
                                </li>
                                @foreach ($mailInbox as $elementMail)
                                <li>
                                    <a href="{{ route('mail-inbox') }}">
                                        <div class="notification_desc">
                                            <p>{{ $elementMail->title }}</p>
                                            <p><span>{{ date_format($elementMail->created_at, 'Y-m-d H:i:s') }}</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <div class="user-name">
                                        <p>{{ Auth::User()->name }}</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li>
                                    <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                @yield('content')
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <p>&copy; 2018 Admin Webcoffeesite Dashboard.</p>
    </div>
    <!--//footer-->
    <!-- js-->
    <script src="{{ asset('js/admin/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/admin/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/admin/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/admin/custom.js') }}"></script>
    <script src="{{ asset('js/admin/slug.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <!--scrolling js-->
    <script src="{{ asset('js/admin/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/admin/scripts.js') }}"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src='{{ asset('js/admin/SidebarNav.min.js') }}' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/admin/bootstrap.js') }}"></script>
    <!-- //Bootstrap Core JavaScript -->
    @yield('script')
</body>
</html>