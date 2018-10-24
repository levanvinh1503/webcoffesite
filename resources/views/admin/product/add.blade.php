@extends('admin.layout.layout')
@section('breadcrumb')
/ Thêm sản phẩm
@endsection
@section('content')
<h2 class="title1">Thêm sản phẩm</h2>
<!-- Block add post -->
<div class="list-addpost-admin widget-shadow" style="padding: 20px">
    <!-- Form add post -->
    <form id="form-add-post" action="{{ route('add-product') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input class="form-control" type="text" id="post-title" name="name" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label>Đường dẫn</label>
            <input class="form-control" type="text" id="slug" name="slug" placeholder="Nhập đường dẫn của sản phẩm">
        </div>
        <div class="form-group">
            <label>Nhóm sản phẩm</label>
            <select class="form-control" type="text" id="collection-id" name="collection-id">
                @foreach ($collection as $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Upload file</label>
            <input class="form-control" type="file" id="zip-url" name="zip-url">
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="add-post" value="Thêm">
        </div>
    </form>
    <!-- End form add post -->
</div>
<!-- End block add post -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        /*Import ckeditor*/
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    });
</script>
@endsection
