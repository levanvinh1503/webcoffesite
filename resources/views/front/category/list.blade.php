@extends('front.category.layout')
@section('content-left')
    <h2 class="heading mb-lg-5 mb-4">{{$thisCategory->name}}</h2>
    <div class="row" style="margin-top: 20px">
        @foreach ($post as $itemPost)
            @if ($loop->index == 0)
                <div class="col-md-6">
                    <a href="{{ route('home-post', $itemPost->slug) }}">
                        <img class="img-post" src="{{ asset('images/'.$itemPost->image) }}" width="100%">
                    </a>
                    <div class="post-container">
                        <h4>
                            <a href="{{ route('home-post', $itemPost->slug) }}">{{ $itemPost->name }}</a>
                        </h4>
                        <p>{{ $itemPost->description }}</p>
                        <div class="post-meta">
                            <span class="view">{{ $itemPost->view }} views</span>
                            <span class="date">{{ $itemPost->created_at }}</span>
                            <span class="author"> <i class="fas fa-user"></i> {{ $itemPost->PostUser->name }}</span>
                        </div>
                    </div>
                </div>
            @elseif ($loop->index == 1)
                <div class="col-md-6">
                    <a href="{{ route('home-post', $itemPost->slug) }}">
                        <img class="img-post" src="{{ asset('images/'.$itemPost->image) }}" width="100%">
                    </a>
                    <div class="post-container">
                        <h4>
                            <a href="{{ route('home-post', $itemPost->slug) }}">{{ $itemPost->name }}</a>
                        </h4>
                        <p>{{ $itemPost->description }}</p>
                        <div class="post-meta">
                            <span class="view">{{ $itemPost->view }} views</span>
                            <span class="date">{{ $itemPost->created_at }}</span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="col-md-12">
            @foreach ($post as $itemPost)
                @if ($loop->index > 1)
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('home-post', $itemPost->slug) }}"><img
                                        src="{{ asset('images/'.$itemPost->image) }}" width="100%"/></a>
                        </div>
                        <div class="col-md-8 list-post">
                            <h4>
                                <a href="{{ route('home-post', $itemPost->slug) }}">{{ $itemPost->name }}</a>
                            </h4>
                            <div class="post-meta">
                                <span class="view">{{ $itemPost->view }} views</span>
                                <span class="date">{{ $itemPost->created_at }}</span>
                            </div>
                            <p>{{ $itemPost->description }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
@section('script')
@endsection
