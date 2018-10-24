@extends('admin.layout.layout')
@section('breadcrumb')
 / Danh sách nhóm sản phẩm
@endsection
@section('content')
<h2 class="title1">Danh sách nhóm sản phẩm</h2>
<!-- BLock list category -->
<div class="list-category-admin widget-shadow">
    <!-- DataTable -->
    <table class="table table-striped table-bordered table-hover" id="table-list-category">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên nhóm</th>
                <th>Đường dẫn</th>
                <th>Số sản phẩm</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($collection as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->CollectionProduct->count() }}</td>
                    <td>
                        <a href="{{ route('edit-category', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-collection">
                            <i class="fa fa-trash"></i> Ẩn
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <!-- End DataTable -->
</div>
<!-- End block list category -->
<!-- Modal Delete-->
<div class="modal fade" id="modal-delete-collection" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ẩn nhóm sản phẩm</h4>
            </div>
            <div class="modal-body">
                <form id="form-block-user" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="delete-collection-id" id="delete-collection-id">
                    <p>Bạn có chắc muốn ẩn nhóm <strong id="delete-name"></strong> và tất cả sản phẩm của chúng?</p>
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
            $('#modal-delete-collection').on('show.bs.modal', function (eventClick) {
                var buttonDelte = $(eventClick.relatedTarget) // Button that triggered the modal
                var currentRow = buttonDelte.closest("tr");
                var collectionId = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
                var collectionName = currentRow.find("td:eq(1)").text();
                var modal = $(this);
                modal.find('.modal-body #delete-collection-id').val(collectionId);
                modal.find('.modal-body #delete-name').html(collectionName);
                //modal.find('.modal-body #form-block-user').attr('action', userName);
            });
        });
    </script>
@endsection
