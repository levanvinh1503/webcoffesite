@extends('admin.layout.layout')
@section('badge-title')
(1)
@endsection
@section('content')
<div class="col_3">
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-tasks icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{ $countCategory }}</strong></h5>
                <span>Chuyên mục</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-edit user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{ $countPost }}</strong></h5>
                <span>Bài viết</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-paste user2 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{ $countCollection }}</strong></h5>
                <span>Chuyên mục</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-clone dollar1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{ $countProduct }}</strong></h5>
                <span>Sản phẩm</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{ $countUser }}</strong></h5>
                <span>Người dùng</span>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="row-one widgettable">
    <div class="col-md-8 content-top-2 card">
        <div class="agileinfo-cdr">

        </div>
    </div>
    <div class="col-md-4 stat">
        <div class="content-top-1">
            <div class="col-md-6 top-content">
                <h5>Đăng ký</h5>
                <label>1283+</label>
            </div>
            <div class="col-md-6 top-content1">    
                <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
            <div class="col-md-6 top-content">
                <h5>Liên hệ</h5>
                <label>2262+</label>
            </div>
            <div class="col-md-6 top-content1">    
                <div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
            <div class="col-md-6 top-content">
                <h5>Lượt truy cập</h5>
                <label>12589+</label>
            </div>
            <div class="col-md-6 top-content1">    
                <div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
@endsection