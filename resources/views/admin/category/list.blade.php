@extends('admin.layout.layout')
@section('breadcrumb')
 / Danh sách chuyên mục
@endsection
@section('content')
<h2 class="title1">Danh sách chuyên mục</h2>
<!-- BLock list category -->
<div class="list-category-admin widget-shadow">
    <!-- DataTable -->
    <table class="table table-striped table-bordered table-hover" id="table-list-category">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên chuyên mục</th>
                <th>Đường dẫn</th>
                <th>Số bài viết</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->CategoryPost->count() }}</td>
                    <td>
                        <a href="{{ route('edit-category', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-category">
                            <i class="fa fa-trash"></i> Ẩn
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <!-- End DataTable -->
</div>
<!-- Modal Delete-->
<div class="modal fade" id="modal-delete-category" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ẩn chuyên mục</h4>
            </div>
            <div class="modal-body">
                <form id="form-delete">
                    {{ csrf_field() }}
                    <input type="hidden" name="delete-product-id" id="delete-category-id">
                    <p>Bạn có chắc muốn ẩn chuyên mục <strong id="delete-name"></strong> này?</p>
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
<!-- End block list category -->
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            /* Bind post name to modal*/
            $('#modal-delete-category').on('show.bs.modal', function (eventClick) {
                var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
                var currentRow = buttonDelte.closest("tr");
                var categoryId = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
                var categoryName = currentRow.find("td:eq(1)").text();
                var modal = $(this);
                modal.find('.modal-body #delete-category-id').val(categoryId);
                modal.find('.modal-body #delete-name').html(categoryName);
                //modal.find('.modal-body #form-block-user').attr('action', userName);
            });
        });
    </script>
@endsection
