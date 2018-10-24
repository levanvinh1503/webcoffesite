@extends('admin.layout.layout')
@section('breadcrumb')
/ Danh sách người dùng
@endsection
@section('content')
<h2 class="title1">Danh sách người dùng</h2>
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
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Bài viết</th>
                <th>Sản phẩm</th>
                <th>Trạng thái</th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ count($item->UserPost) }}</td>
                <td>{{ count($item->UserProduct) }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->UserRole->name }}</td>
                <td>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-block-user">
                        <i class="fa fa-trash"></i> Block
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
<div class="modal fade" id="modal-block-user" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Block</h4>
            </div>
            <div class="modal-body">
                <form id="form-block-user" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="block-user-id" id="block-user-id">
                    <p>Bạn có chắc muốn block user <strong id="user-name"></strong> ?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <a href="" class="btn btn-danger" id="delete-post">Block</a>
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
        $('#modal-block-user').on('show.bs.modal', function (eventClick) {
            var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
            var currentRow = buttonDelte.closest("tr");
            var postId = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var userName = currentRow.find("td:eq(1)").text();
            var modal = $(this);
            modal.find('.modal-body #block-user-id').val(postId);
            modal.find('.modal-body #user-name').html(userName);
            //modal.find('.modal-body #form-block-user').attr('action', userName);
        });
    });
</script>
@endsection
