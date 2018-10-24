@extends('admin.layout.layout')
@section('breadcrumb')
 / Sửa chuyên mục
@endsection
@section('content')
<h2 class="title1">Thêm chuyên mục</h2>
<!-- Block Block add Category -->
<div class="list-addcategory-admin widget-shadow" style="padding: 20px;">
    <!-- Form add Category -->
    <form id="form-add-category" action="{{ route('edit-category', $category->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <div class="form-group">
            <label>Tên chuyên mục</label>
            <input class="form-control" type="text" id="category-name" name="name" placeholder="Nhập tên chuyên mục" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <label>Đường dẫn</label>
            <input class="form-control" type="text" id="category-slug" name="slug" placeholder="Đường dẫn chuyên mục (tạo tự động)" value="{{ $category->slug }}"> 
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="add-category" value="Sửa">
        </div>
    </form>
    <!-- End Form add Category -->
</div>
<!-- End Block add Category -->
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
    });
</script>
@endsection
