@extends('layout.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/blog/style.css')}}">
@endsection
@section('content')
    <section class="inner-banner">
        <div class="banner-layer">
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 content-left">
                @yield('content-left')
            </div>
            <!-- End content left -->
            <!-- Content right -->
            <div class="col-md-3 single-gd">
                <h4>Chuyên mục</h4>
                @foreach($category as $cate)
                    <a href="{{route('home-category', $cate->slug)}}" style="color: black">
                        <i class="fas fa-folder-open"></i>
                        {{$cate->name}} ({{$cate->CategoryPost->count()}})
                    </a><br/>
                @endforeach
            </div>
            <!-- End content right -->
        </div>
    </div>
@endsection
@section('script')
@endsection
