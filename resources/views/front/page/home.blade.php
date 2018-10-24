@extends('layout.layout')
@section('css')
<style>
body {
    background: rgb(177, 218, 251);
}
</style>
@endsection
@section('content')
@include('layout.common')
<!-- banner -->
<section class="banner" id="home">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="slider-info bg1 w3-agile-grid">
                    <div class="bs-slider-overlay">
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg2 w3-agile-grid">
                    <div class="bs-slider-overlay">
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg3 w3-agile-grid">
                    <div class="bs-slider-overlay">
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg4 w3-agile-grid">
                    <div class="bs-slider-overlay">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
    <div class="container py-md-3">
        <h3 class="heading mb-md-5 mb-4 about-us">Giới thiệu</h3>
        <div class="row about-grids agile-info">
            <div class="col-lg-6 mb-lg-0 w3-agile-grid mb-5">
                <p>Với đội ngũ nhân viên dày dặn kinh nghiệm trong lĩnh vực làm web, nhìn thấy được nhu cầu làm web
                    và các khó khăn của khách hàng trong việc tìm và sử dùng dịch vụ uy tín và an toàn. Chúng tôi
                    cam kết dịch vụ <span style="font-weight: bold;">webcoffeesite.com</span> của chúng tôi cung cấp
                    sản phẩm <span style="font-weight: bold;">chất lượng 100%</span>.
                Luôn đồng hành cùng khách hàng trong quá trình sử dụng web của chúng tôi cung cấp. </p>
                <p class="mt-2 mb-3">Chúng tôi đặt tiêu chí sản phẩm của khách hàng lên hàng đầu. Cam kết hoàn tiền
                    nếu dịch vụ không đạt yêu cầu của khách hàng trong quá trình sử dụng. Nhận yêu cầu khắc phục sự
                    cố 24/24, giải quyết <span style="font-weight: bold;">nhanh-gọn-lẹ</span> ngay khi có yêu cầu.
                </p>
                <p>Khách hàng hợp tác với <span style="font-weight: bold;">webcoffesite</span> sẽ được tư vấn theo
                    từng bước chuyên nghiệp từ phân tích ý tưởng, thiết kế giao diện, lập trang web, thiết kế
                    responsive phiên bản di động, hướng dẫn sử dụng, tối ưu hóa công cụ tìm kiếm. Báo cáo theo từng
                    giai đoạn cụ thể.
                </p>
                <a href="{{ route('home-about-us') }}">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-md-4 w3-agile-grid pr-md-0">
                <h3 class="margin">Chuyên nghiệp</h3>
                <h3 class="black">nhanh - gọn - lẹ</h3>
            </div>
            <div class="col-lg-3 col-md-4 w3-agile-grid mt-md-0 mt-4">
                <h3 class="margin green">Tận tâm với khách hàng</h3>
                <h3 class="grey">Trả phí một lần duy nhất</h3>
            </div>
        </div>
    </div>
</section>
<!-- //about -->

<!-- how we work -->
<section class="work">
    <div class="work-layer py-5">
        <div class="container py-md-3">
            <h3 class="heading mb-lg-5 mb-4">How We Work</h3>
            <div class="row join agile-info">
                <div class="col-md-3 col-sm-6 steps-reach w3-agile-grid">
                    <span class="fab fa-algolia"></span>
                    <h4>Step 1</h4>
                    <p>Tiếp nhận yêu cầu. Thiết kế giao diện theo yêu cầu.</p>
                    <div class="style-border">
                        <img src="images/sty1.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-sm-0 mt-5 steps-reach w3-agile-grid">
                    <span class="fab fa-asymmetrik"></span>
                    <h4>Step 2</h4>
                    <p>Demo sản phẩm ban đầu. Tiếp nhận thêm yêu cầu chỉnh sửa sản phẩm.</p>
                    <div class="style-border second-border">
                        <img src="images/sty2.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-md-0 mt-5 pt-md-0 pt-sm-5 steps-reach w3-agile-grid">
                    <span class="fas fa-bug" aria-hidden="true"></span>
                    <h4>Step 3</h4>
                    <p>Bàn giao website. Hỗ trợ khai báo sitemap với google. Hướng dẫn sử dụng hệ thống website</p>
                    <div class="style-border">
                        <img src="images/sty1.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-md-0 mt-5 pt-md-0 pt-sm-5 steps-reach w3-agile-grid">
                    <span class="fas fa-check-square" aria-hidden="true"></span>
                    <h4>Step 4</h4>
                    <p>Chăm sóc website trong quá trình khách hàng sử dụng. Nhận yêu cầu chỉnh sửa và hỗ trợ khách
                    hàng tận răng.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //how we work -->
<section class="template container-fluid">
    <!--kho giao dien-->
    <div id="w154115" style=" padding-top: 5%; padding-bottom: 5px;" class="templates">
        <h1 style="text-align: center; color: #5e3204;"><b style="">KHO GIAO DIỆN</b><br></h1>
    </div>
    <div class="row row-template">
        @foreach ($product as $elementProduct)
        <div wiz-cg="loop" class="col-md-4" id="w15458" style="padding:0">
            <div class="product-hover" style="padding: 10px; border-radius: 10px; margin: 10px 2px 30px; background-color: rgb(255, 255, 255);box-shadow: 0px 13px 25px -4px rgba(58,163,224, 0.55);margin:10px 20px">
                <img style="width: 100%;object-fit:cover; height:200px" alt="iPhone" id="w15459" src="{{ asset('images/'.$elementProduct->image.'') }}" class="myImg">
                <h3 style=" text-align:center;font-size:1.5em;color:rgb(132,133,135);" id="w154510">
                    <strong style="" id="w154511">
                        {{ $elementProduct->name }}
                    </strong>
                    <div style="text-align:center;" class="group-template" id="w154512">
                        <a style="padding:5px 10px; background-color:green;color:#fff; border-radius: 10px; font-size:16px;margin-right:3px; text-decoration:none" href="extract-product/{{ $elementProduct->slug }}" class="buttontemplate" id="w154513" target="_blank">
                            <i class="fas fa-search-plus" style="margin-right: 3px;" id="w154514"></i>
                            Xem thử
                        </a>
                    </div>
                </h3>
            </div>
        </div>
        @endforeach
    </div>
    <div id="" class="designbyself mydesignbyself" style="display: none; position: fixed; z-index: 99; padding-top: 100px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.9); text-align: center;">
        <span class="close" style="color:#fff; position:absolute; top:5%; right:5%; opacity:0.8; position:fixed">×</span>
        <img class="designbyself-content img01" id="" src="https://i.imgur.com/kSSwHSp.png">
        <div class="designbyselfcaption"></div>
    </div>
    <!--ket thuc kho giao dien-->
</section>
<!-- management services -->
<section class="services py-5">
    <div class="container agile-info py-md-3">
        <h3 class="heading mb-lg-5 mb-4">DỊCH VỤ CHÚNG TÔI CUNG CẤP</h3>
        <div class="row service_grids">
            <div class="col-lg-4 w3-agile-grid">
                <div class="grid">
                    <h4 class="mb-3">Thiết Kế Website</h4>
                    <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nun ca dictum. Quisquen ac
                        ipsum porta, ultrices metus sit amet,
                    curs in nisl. Duis aliquet varius sem sit amet.</p>
                    <a href="{{ route('home-services') }}" data-toggle="modal" data-target="#exampleModalCenter" role="button">
                        Đọc thêm 
                        <span class="fas ml-1 fa-angle-double-right"></span> 
                    </a>
                </div>
                <div class="grid mt-4">
                    <h4 class="mb-3">Marketing Online Seo</h4>
                    <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nun ca dictum. Quisquen ac
                        ipsum porta, ultrices metus sit amet,
                    curs in nisl. Duis aliquet varius sem sit amet.</p>
                    <a href="{{ route('home-services') }}" data-toggle="modal" data-target="#exampleModalCenter" role="button">
                        Đọc thêm 
                        <span class="fas ml-1 fa-angle-double-right"></span> 
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-5">
                <img src="images/service.jpg" alt="" class="img-fluid"/>
            </div>
            <div class="col-lg-4 w3-agile-grid">
                <div class="grid">
                    <h4 class="mb-3">Thiết Kế Website Bán Hàng</h4>
                    <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nun ca dictum. Quisquen ac
                        ipsum porta, ultrices metus sit amet,
                    curs in nisl. Duis aliquet varius sem sit amet.</p>
                    <a href="{{ route('home-services') }}" data-toggle="modal" data-target="#exampleModalCenter" role="button">
                        Đọc thêm
                        <span class="fas ml-1 fa-angle-double-right"></span> 
                    </a>
                </div>
                <div class="grid mt-4">
                    <h4 class="mb-3">Thiết Kế Website Giới Thiệu</h4>
                    <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nun ca dictum. Quisquen ac
                        ipsum porta, ultrices metus sit amet,
                    curs in nisl. Duis aliquet varius sem sit amet.</p>
                    <a href="{{ route('home-services') }}" data-toggle="modal" data-target="#exampleModalCenter" role="button">
                        Đọc thêm
                        <span class="fas ml-1 fa-angle-double-right"></span> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //management services -->

<!-- servicesbottom -->
<section class="webdesigned container-fluid">
    <div style="padding-top: 5%;padding-bottom: 5px;" class="images">
        <h1 style="text-align: center; color: #5e3204"><b> CÁC WEBSITE ĐÃ LÀM</b><br></h1>
    </div>
    <div>
        <div style="width: 100%;padding-left: 0px;padding-right: 0px">
            <div class="row" wiz-data="banner" wiz-type="bannerfocus" wiz-md="mdlink" wiz-max="50" wiz-start="1">
                <div wiz-cg="loop" class="col-md-4">
                    <a href="#" id="w114954"><img src="https://i.imgur.com/icgtJ35.jpg" =""="" style="width: 100%;margin-top: 10px;box-shadow: 0px 5px 25px -4px rgba(151, 170, 172, 0.55);object-fit: cover;height: 454px" class="myImg" id="w114955" title="Click để xem lớn hơn"></a>
                </div>
                <div wiz-cg="loop" class="col-md-4">
                    <a href="#" id="w114954"><img src="https://i.imgur.com/kSSwHSp.png" =""="" style="width: 100%;margin-top: 10px;box-shadow: 0px 5px 25px -4px rgba(151, 170, 172, 0.55);object-fit: cover;height: 454px" class="myImg" id="w114955" title="Click để xem lớn hơn"></a>
                </div>
                <div wiz-cg="loop" class="col-md-4">
                    <a href="#" id="w114954"><img src="https://i.imgur.com/7JhT6Ut.png?1" =""="" style="width: 100%;margin-top: 10px;box-shadow: 0px 5px 25px -4px rgba(151, 170, 172, 0.55);object-fit: cover;height: 454px" class="myImg" id="w114955" title="Click để xem lớn hơn"></a>
                </div>
            </div>
            <div id="" class="designbyself mydesignbyself">
                <span class="close"
                style="color:#fff; position:absolute; top:5%; right:5%; opacity:0.8; position:fixed">×</span>
                <img class="designbyself-content img01" id="">
                <div class="designbyselfcaption"></div>
            </div>
        </div>
    </div>
</section>
<!-- //servicesbottom -->

<!-- quotes -->
<section class="quotes py-5 text-center">
    <div class="container py-md-3">
        <div class="quotes-info agile-info-quotes">
            <h3 class="mb-3">ĐĂNG KÝ</h3>
            <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nun ca dictum. Quisquen ac ipsum
                porta, ultrices metus sit amet,
            curs in nisl. Duis aliquet varius sem sit amet.</p>
            <a class="bt mt-4 mr-2 text-capitalize" href="#" data-toggle="modal" data-target="#exampleModalCenter"
            role="button"> read more</a>
            <a class="bt mt-4 text-capitalize start" href="contact.html" role="button"> Get Started</a>
        </div>
    </div>
</section>
<!-- //quotes -->
@endsection