<!-- footer -->
<footer class="contact-us">
    <div class="container-fluid p-5">
        <div class="row footer-gap">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <h3 class="text-capitalize mb-3">Giới thiệu</h3>
                <p>Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum
                    porta, ultrices metus sit amet,
                    cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3 class="text-capitalize mb-3">Kết nối</h3>
                        <p><span class="fab fa-twitter"></span> twitter/@my_website</p>
                        <p><span class="fab fa-instagram"></span> instagram/@my_website</p>
                        <p><span class="fab fa-youtube mb-4"></span> youtube/@my_website</p>
                        <a href="https://www.facebook.com/webcoffeesite/" class="facebook mr-2"><span
                                    class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <h3 class="text-capitalize mb-3">Liên hệ</h3>
                        <address class="mb-0">
                            <p class="mb-2"><i class="fas fa-map-marker"></i>
                                Số 15, Đường số 6, Phường Hiệp Phú, Quận 9, TP. HCM
                            </p>
                            <p><i class="fas mr-1 fa-clock"></i> 08 a.m to 08 p.m</p>
                            <p><i class="fas mr-1 fa-phone"></i> 096 828 35 33</p>
                            <p><i class="fas mr-1 fa-phone"></i> 038 569 94 20</p>
                            <p><i class="fas mr-1 fa-phone"></i> 094 824 81 53</p>
                            <p>
                                <i class="fas mr-1 fa-envelope-open"></i>
                                <a href="mailto:webcoffeesite@gmail.com">webcoffeesite@gmail.com</a>
                            </p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-0 p-md-0">
                <h3 class="text-capitalize mb-3">Dịch vụ</h3>
                <ul>
                    <li><i class="fas mr-1 fa-chevron-circle-right"></i> Thiên đường thiết kế website của bạn.</li>
                    <li><i class="fas mr-1 fa-chevron-circle-right"></i> Dịch vụ tốt nhất dành cho bạn.</li>
                    <li><i class="fas mr-1 fa-chevron-circle-right"></i> Website chất lượng và giá tốt nhất việt nam.</li>
                </ul>
                <h3 class="text-capitalize mt-4 mb-3">Đăng ký</h3>
                <p class="mb-3">Đăng ký nhận bản tin của chúng tôi để nhận tin tức, ưu đãi tuyệt vời và hơn thế nữa</p>
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success"><p style="color: red">{{Session::get('thanhcong')}}</p></div>
                @endif
                <form action="{{ route('home-contact') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="email" name="email" placeholder="Nhập email..." required="">
                    <input type="hidden" name="title" value="Đăng ký">
                    <input type="hidden" name="name" value="Grant">
                    <input type="hidden" name="phone" value="NULL">
                    <input type="hidden" name="message" value="Đăng ký nhận tin">
                    <button class="btn1"><i class="far fa-paper-plane"></i></button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-0 mt-4 p-md-0">
                <h3 class="text-capitalize mb-3">Bài viết mới</h3>
                @foreach($postFooter as $postf)
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 col-sm-3 col-4 pr-sm-3 pr-0 blog-grid-left">
                        <a href="{{route('home-post', $postf->slug)}}">
                            <img src="{{asset('images/'.$postf->image.'')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-9 col-8 blog-grid-right">
                        <h5>
                            <a href="{{route('home-post', $postf->slug)}}">{{$postf->name}}</a>
                        </h5>
                        <div class="sub-meta">
                            <span>
                                <i class="far fa-clock"></i> {{ $postf->created_at }}
                                <i class="fas fa-eye"></i> {{$postf->view}}
                                <i class="fas fa-user"></i> {{ $postf->PostUser->name }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="copyright pb-4 text-center">
        <p>© 2018 Webcoffeesite</p>
    </div>
</footer>