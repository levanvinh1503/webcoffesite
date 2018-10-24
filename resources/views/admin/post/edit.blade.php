@extends('admin.layout.layout')
@section('breadcrumb')
/ Sửa bài viết / {{ $post->id }}
@endsection
@section('content')
<h2 class="title1">Sửa bài viết / {{ $post->name }}</h2>
<!-- Block edit post -->
<div class="list-addpost-admin widget-shadow col-md-12" style="padding: 20px">
    <!-- Form Edit Post -->
    <form id="form-add-post" action="{{ route('edit-post', $post->id) }}" method="POST" enctype="multipart/form-data">
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
        <!-- Block left -->
        <div class="col-md-8">
            <div class="form-group">
                <label>Tên bài viết</label>
                <input class="form-control" type="text" id="post-title" name="name" value="{{ $post->name }}" placeholder="Nhập tên chuyên mục">
            </div>
            <div class="form-group">
                <label>Đường dẫn</label>
                <input class="form-control" value="{{ $post->slug }}" type="text" id="post-slug" name="slug" placeholder="Đường dẫn chuyên mục (tạo tự động)">
            </div>
            <div class="form-group">
                <label>Mô tả ngắn</label>
                <textarea class="form-control" type="text" id="post-description" rows="4" name="description" placeholder="Mô tả ngắn">{{ $post->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
            </div>
        </div>
        <!-- End block left -->
        <!-- Block right -->
        <div class="col-md-4">
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="hidden" name="old-image" value="{{ $post->image }}">
                <img src="{{ asset('images/' . $post->image) }}" style="width: 100%;border: 1px solid #c0c0c0; padding: 5px">
            </div>
            <div class="form-group">
                <label>Đổi hình ảnh</label>
                <input class="form-control" type="file" id="post-image" name="image" accept="image/png, image/jpeg">
            </div>
            <div class="form-group">
                <label>Chuyên mục</label>
                <select class="form-control" type="text" id="post-category-update" name="post-category-update">
                    @foreach ($category as $valueCate)
                    <option @if ($post->category_id == $valueCate->id) selected="selected" @endif value="{{ $valueCate->id }}">{{ $valueCate->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- End block right -->
        <div class="form-group col-md-12">
            <input class="btn btn-primary" type="submit" name="edit-post" value="Chỉnh sửa">
        </div>
    </form>
    <!-- End Form -->
</div>
<!-- End block edit post -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        /*Convert string to url*/
        $('#category-name').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#category-slug').val(slugResult);
        });
        /*Convert string to url*/
        $('#post-title').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#post-slug').val(slugResult);
        });

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
