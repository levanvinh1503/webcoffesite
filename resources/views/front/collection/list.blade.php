@extends('layout.layout')
@section('content')
<section class="banner">
<img src="{{ asset('images/bg-collection.jpg') }}" />
</section>
<section class="template container-fluid">
    <!--kho giao dien-->
    <div id="w154115" style=" padding-top: 5%; padding-bottom: 5px;" class="templates">
        <h1 style="text-align: center; color: #5e3204;"><b style="">KHO GIAO DIỆN</b><br></h1>
    </div>
    <!--ket thuc kho giao dien-->
    <div class="sec-align tab_menu  wow slideInDown">
        <div class="customer_right">
            <ul class="nav nav-tabs">
                <li  class="active"><a data-toggle="tab" href="#all">Tất cả</a></li>
                @foreach ($collection as $elementCollection)
                    <li>
                        <a data-toggle="tab" href="#{{ $elementCollection->slug }}">{{ $elementCollection->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                <div id="all" class="tab-pane in active">
                    <div class="sec-align">
                        <div class="nav-tabswap-ct">
                            <div id="guide-1">
                                <div class="step-guide-ct">
                                    @foreach ($product as $elementProduct)
                                        <div wiz-cg="loop" class="col-md-4" id="w15458" style="padding:0">
                                            <div class="" style="padding: 10px; border-radius: 10px; margin: 10px 2px 30px; background-color: rgb(255, 255, 255);box-shadow: 0px 13px 25px -4px rgba(58,163,224, 0.55);margin:10px 20px">
                                                <img style="width: 100%;object-fit:cover; height:200px" alt="iPhone" id="w15459" src="{{ asset('images/'.$elementProduct->image.'') }}" class="myImg">
                                                <h3 style=" text-align:center;font-size:1.5em;color:rgb(132,133,135);" id="w154510">
                                                    <strong style="" id="w154511">
                                                        {{ $elementProduct->name }}
                                                    </strong>
                                                    <div style="text-align:center;" class="group-template" id="w154512">
                                                        <a style="padding:5px 10px; background-color:green;color:#fff; border-radius: 10px; font-size:16px;margin-right:3px; text-decoration:none" href="extract-product/{{ $elementProduct->slug }}" class="" id="w154513" target="_blank">
                                                            <i class="fas fa-search-plus" style="margin-right: 3px;" id="w154514"></i>
                                                            Xem thử
                                                        </a>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($collection as $elementCollection)
                <div id="{{ $elementCollection->slug }}" class="tab-pane">
                    <div class="sec-align">
                        <div class="nav-tabswap-ct">
                            <div id="guide-1">
                                <div class="step-guide-ct">
                                    @foreach ($product as $elementProduct)
                                        <div wiz-cg="loop" class="col-md-4" id="w15458" style="padding:0">
                                            <div class="" style="padding: 10px; border-radius: 10px; margin: 10px 2px 30px; background-color: rgb(255, 255, 255);box-shadow: 0px 13px 25px -4px rgba(58,163,224, 0.55);margin:10px 20px">
                                                <img style="width: 100%;object-fit:cover; height:200px" alt="iPhone" id="w15459" src="{{ asset('images/'.$elementProduct->image.'') }}" class="myImg">
                                                <h3 style=" text-align:center;font-size:1.5em;color:rgb(132,133,135);" id="w154510">
                                                    <strong style="" id="w154511">
                                                        {{ $elementProduct->name }}
                                                    </strong>
                                                    <div style="text-align:center;" class="group-template" id="w154512">
                                                        <a style="padding:5px 10px; background-color:green;color:#fff; border-radius: 10px; font-size:16px;margin-right:3px; text-decoration:none" href="extract-product/{{ $elementProduct->slug }}" class="" id="w154513" target="_blank">
                                                            <i class="fas fa-search-plus" style="margin-right: 3px;" id="w154514"></i>
                                                            Xem thử
                                                        </a>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="" class="designbyself mydesignbyself" style="display: none; position: fixed; z-index: 99; padding-top: 100px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.9); text-align: center;">
            <span class="close" style="color:#fff; position:absolute; top:5%; right:5%; opacity:0.8; position:fixed">×</span>
            <img class="designbyself-content img01" id="" src="https://i.imgur.com/kSSwHSp.png">
            <div class="designbyselfcaption"></div>
        </div>
    </div>
</section>
@endsection
@section('script')
@endsection
