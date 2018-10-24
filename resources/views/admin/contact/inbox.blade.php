@extends('admin.layout.layout')
@section('breadcrumb')
/ Liên hệ
@endsection
@section('content')
<h2 class="title1">Mail Page</h2>
<div class="col-md-4 compose-left">
    <div class="folder widget-shadow">
        <ul>
            <li class="head">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                Mail inbox 
                <span>{{ count($contact->toArray()) }}</span>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-8 compose-right widget-shadow">
    <div class="panel-default">
        <div class="panel-heading">
            Inbox 
        </div>
        <div class="inbox-page">
            @foreach ($contact as $elementContact)
            <div class="inbox-row widget-shadow" role="tablist" aria-multiselectable="true">
                <div class="mail ">
                    <input type="checkbox" class="checkbox"> 
                </div>
                <div class="mail mail-name">
                    <h6>{{ $elementContact->name }}</h6>
                </div>
                <a role="button" data-toggle="collapse"  href="#{{ $elementContact->id }}" aria-expanded="true" aria-controls="collapseOne">
                    <div class="mail"><p>{{ $elementContact->title }}</p></div>
                </a>
                <div class="mail-right dots_drop">
                    <div class="dropdown">
                        <a href="#"  data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div> 
                </div>
                <div class="mail-right"><p>{{ $elementContact->created_at }}</p></div>
                <div class="clearfix"> </div>
                <div id="{{ $elementContact->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="mail-body">
                        <p>{{ $elementContact->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
