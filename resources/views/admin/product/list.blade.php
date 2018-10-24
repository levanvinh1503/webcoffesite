@extends('admin.layout.layout')
@section('breadcrumb')
 / Danh sách sản phẩm
@endsection
@section('content')
<h2 class="title1">Danh sách sản phẩm</h2>
<!-- Block list post -->
<div class="list-category-admin widget-shadow">
    @if(Session::has('thanhcong'))
    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
    @endif
    <!-- DataTable -->
    <table class="table table-striped table-bordered table-hover " id="table-list-post">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Tên</th>
                <th>Nhóm sản phẩm</th>
                <th>Đường dẫn</th>
                <th>Status</th>
                <th>Ảnh đại diện</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->ProductCollection->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->status }}</td>
                <td><img src="{{ asset('images/'.$item->image) }}" style="width: 100px" /></td>
                <td>
                    <a href="{{ route('edit-product', $item->id) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i> Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-product">
                        <i class="fa fa-trash"></i> Ẩn
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- End DataTable -->
</div>
<!-- End Block list post -->
<!-- Modal Delete-->
<div class="modal fade" id="modal-delete-product" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Ẩn Sản phẩm</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="delete-product-id" id="delete-product-id">
                <p>Bạn có chắc muốn ẩn sản phẩm <strong id="delete-name"></strong> này?</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <a href="" class="btn btn-danger" id="delete-post">Ẩn</a>
                </div>
            </form> 
        </div>
    </div>
</div>
</div>
<!-- End modal delete -->
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            /* Bind post name to modal*/
            $('#modal-delete-product').on('show.bs.modal', function (eventClick) {
                var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
                var currentRow = buttonDelte.closest("tr");
                var productId = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
                var productName = currentRow.find("td:eq(1)").text();
                var modal = $(this);
                modal.find('.modal-body #delete-post-id').val(productId);
                modal.find('.modal-body #delete-name').html(productName);
                //modal.find('.modal-body #form-block-user').attr('action', userName);
            });
        });
    </script>
@endsection
