<!-- header -->
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://i.imgur.com/spQbz2A.png" style="width: 100%; max-width: 100px">
            </a>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item active  mr-lg-3">
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ
                    </a>
                </li>
                <li class="nav-item  mr-lg-3">
                    <a class="nav-link" href="{{ route('home-about-us') }}">Giới thiệu</a>
                </li>
                <li class="nav-item  mr-lg-3">
                    <a class="nav-link" href="{{ route('home-services') }}">Dịch vụ</a>
                </li>
                <li class="nav-item  mr-lg-3">
                    <a class="nav-link" href="{{ route('home-collection') }}">Kho giao diện</a>
                </li>
                <li class="nav-item dropdown mr-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 0;">
                        @foreach($categoryHeader as $cateHeader)
                        @if (count($cateHeader->CategoryPost) > 0)
                        <a class="dropdown-item" href="{{route('home-category', $cateHeader->slug)}}">{{$cateHeader->name}}</a>
                        @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-contact') }}">Liên hệ</a>
                </li>
            </ul>
            <div class="buttons">
                <a href="tel:0968283533" class="btn-style btn-nav scroll-to-btn" id-data="">Yêu cầu báo giá</a>
            </div>

        </div>
    </nav>
</div>
</header>
<!-- //header -->