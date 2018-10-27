@extends('layout.layout')
@section('css')

@endsection
@section('content')

    <!--home Section -->
    <section id="home" class="home">
        <div class="overlay">
            <div class="home_skew_border">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp">
                                        <h1>WELCOME TO WEBCOFFEESITE</h1>
                                        <div class="separator"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End of home section -->
    <!-- History section -->
    <section id="about-us" class="history sections">
        <div class="container">
            <div class="row">
                <div class="main_history">
                    <div class="col-sm-6">
                        <div class="single_history_img">
                            <img src="{{asset('images/about-us.jpg')}}" alt=""/>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single_history_content">
                            <div class="head_title">
                                <h2>Giới thiệu</h2>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal
                                distribution of letters, as opposed to using 'Content here, content here', making it
                                look like readable English. Many desktop publishing packages and web page editors now
                                use
                                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>

                            <a href="{{route('home-about-us')}}" class="btn btn-lg">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div><!--End of row -->
        </div><!--End of container -->
    </section><!--End of history -->
    <!-- service Section -->
    <section id="service" class="service">
        <div class="container-fluid">
            <div class="row">
                <div class="main_service">
                    <div class="col-md-6 col-sm-12 no-padding">
                        <div class="single_service single_service_text text-right">
                            <div class="head_title">
                                <h2>DỊCH VỤ</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                            <article class="single_service_right_text">
                                                <h4>Thiết kế Website</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->
                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">

                                        <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                            <article class="single_service_right_text">
                                                <h4>Marketing Online SEO</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->

                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">

                                        <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1 margin-bottom-20">
                                            <article class="single_service_right_text">
                                                <h4>Marketing Online SEO</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->

                            </div>
                        </div>
                    </div><!-- End of col-sm-6 -->

                    <div class="col-md-6 col-sm-12 no-padding">
                        <figure class="single_service single_service_img">
                            <div class="overlay-img"></div>
                            <img src="{{asset('images/servicerightimg.jpg')}}" alt=""/>
                        </figure><!-- End of figure -->
                    </div><!-- End of col-sm-6 -->

                </div>
            </div><!-- End of row -->
        </div><!-- End of Container-fluid -->
    </section><!-- End of service Section -->
    <section id="portfolio" class="portfolio sections">
        <div class="container">
            <div class="row">
                <div class="main_portfolio">
                    <div class="col-sm-12">
                        <div class="head_title text-center" style="margin-bottom: 0">
                            <h2>KHO GIAO DIỆN</h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="work_menu text-center">
                        <div id="filters" class="toolbar mb2 mt2">
                            <button class="btn-md fil-cat filter active" data-filter=".all">Tất cả</button>
                            @foreach($collection as $item)
                                <button class="btn-md fil-cat filter active" data-filter=".{{$item->slug}}">
                                    {{$item->name}}
                                </button>
                            @endforeach
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div id="portfoliowork">
                        @foreach($product as $itemProduct)
                            <div class="single_portfolio tile scale-anm all {{$itemProduct->ProductCollection->slug}}">
                                <img src="{{asset('images/'.$itemProduct->image.'')}}" alt="Click để xem ảnh lớn"/>
                                <a href="{{asset('images/'.$itemProduct->image.'')}}" class="portfolio-img" alt="Click để xem ảnh lớn">
                                    <div class="grid_item_overlay">
                                        <div class="separator4" style="margin: 0"></div>
                                        <h3>{{$itemProduct->name}}</h3>
                                    </div>
                                </a>
                                <a href="extract-product/{{$itemProduct->slug}}" class="preview">Xem thử</a>
                            </div>
                        @endforeach
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div><!-- End off container -->
    </section> <!-- End off Work Section -->
    <!-- Counter Section -->
    <section id="counter" class="counter">
        <div class="video_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_counter_area text-center">
                            <div class="row">
                                <div class="single_counter border_right">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="far fa-thumbs-up"></i>
                                            <h2 class="statistic-counter">3891</h2>
                                            <h4 class="">Lượt truy cập</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="fas fa-trophy"></i>
                                            <h2 class="statistic-counter">281</h2>
                                            <h4 class="">Giao diện</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="fas fa-business-time"></i>
                                            <h2 class="statistic-counter">618</h2>
                                            <h4 class="">Bài viết</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="fas fa-users"></i>
                                            <h2 class="statistic-counter">178</h2>
                                            <h4 class="">Người đăng ký</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End off container -->
    </section>   <!-- End of counter section -->
    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="row">
                <div class="main_pricing_area sections">
                    <div class="head_title text-center" style="margin-bottom: 0">
                        <h2>BẢNG GIÁ</h2>
                        <div class="separator"></div>
                    </div><!-- End off Head_title -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing">
                            <div class="pricing_head">
                                <h3>STARTER</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">1 triệu VNĐ</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="" class="btn btn-md">Đăng ký</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing pricing_business">
                            <div class="pricing_head ">
                                <h3>PREMIUM</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">1 triệu 5 VNĐ</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="" class="btn btn-md">Đăng ký</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing">
                            <div class="pricing_head">
                                <h3>BUSINESS</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">2 triệu 5 VNĐ</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="" class="btn btn-md">Đăng ký</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Pricing Section -->
    <!-- Team Section -->
    <section id="team" class="team">
        <div class="main_team_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title textwhite text-center margin-top-80">
                            <h2>THÀNH VIÊN</h2>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->

                        <div class="main_team">
                            <ul>
                                <li>
                                    <div class="single_team_img">
                                        <img src="{{asset('images/team1.jpg')}}" alt=""/>
                                    </div>
                                    <div class="single_team_text">
                                        <h4>Lê Văn Vịnh</h4>
                                        <p>Developer</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="{{asset('images/team2.jpg')}}" alt=""/>
                                    </div>
                                    <div class="single_team_text">
                                        <h4>Trần Quang Vinh</h4>
                                        <p>Developer</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="{{asset('images/team3.jpg')}}" alt=""/>
                                    </div>
                                    <div class="single_team_text">
                                        <h4>Phạm Huỳnh Bảo Long</h4>
                                        <p>Marketing</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="{{asset('images/team3.jpg')}}" alt=""/>
                                    </div>
                                    <div class="single_team_text">
                                        <h4>Bùi Thanh Hiếu</h4>
                                        <p>Developer</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div><!-- End of main team contant -->
                </div>
            </div><!-- End of container -->
        </div>
    </section><!-- End off Team Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center" style="margin-bottom: 0">
                            <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="main_contact_info">
                                    <div class="row">
                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>Địa chỉ</h3>
                                                        <p>
                                                            <i class="fas fa-map-marker"></i>
                                                            Số 15, Đường số 6, Phường Hiệp Phú, Quận 9, TP. HCM
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>Điện thoại</h3>
                                                        <p><i class="fas mr-1 fa-phone"></i> 096 828 35 33</p>
                                                        <p><i class="fas mr-1 fa-phone"></i> 038 569 94 20</p>
                                                        <p><i class="fas mr-1 fa-phone"></i> 094 824 81 53</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>Email</h3>
                                                        <p>
                                                            <i class="fas mr-1 fa-envelope-open"></i>
                                                            <a href="mailto:webcoffeesite@gmail.com">webcoffeesite@gmail.com</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <form action="{{ route('home-contact') }}" id="formid" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        @if(Session::has('thanhcong'))
                                            <div class="alert alert-success"><p style="color: red">{{Session::get('thanhcong')}}</p></div>
                                        @endif
                                        <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                               placeholder="Họ tên" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                               placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="title"
                                                               placeholder="Tiêu đề" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone"
                                                               placeholder="Số điện thoại" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="7"
                                                          placeholder="Nội dung"></textarea>
                                            </div>
                                            <div class="">
                                                <input type="submit" value="Gưi" class="btn btn-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of contact section -->
@endsection
@section('script')

@endsection