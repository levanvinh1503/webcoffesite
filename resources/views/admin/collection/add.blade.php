@extends('admin.layout.layout')
@section('breadcrumb')
 / Thêm nhóm sản phẩm
@endsection
@section('content')
<h2 class="title1">Thêm nhóm sản phẩm</h2>
<!-- Block Block add Category -->
<div class="list-addcategory-admin widget-shadow" style="padding: 20px;">
    <!-- Form add Category -->
    <form id="form-add-category" action="{{ route('add-collection') }}" method="POST" enctype="multipart/form-data">
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
            <label>Tên nhóm sản phẩm</label>
            <input class="form-control" type="text" id="collection-name" name="collection-name" placeholder="Nhập tên nhóm sản phẩm">
        </div>
        <div class="form-group">
            <label>Đường dẫn</label>
            <input class="form-control" type="text" id="collection-slug" name="collection-slug" placeholder="Đường dẫn nhóm sản phẩm (tạo tự động)"> 
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="add-collection" value="Thêm">
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
        $('#collection-name').keyup(function () {
            var titleInput = $(this).val();
            var slugResult = ChangeToSlug(titleInput);
            $('#collection-slug').val(slugResult);
        });
    });
</script>
@endsection
