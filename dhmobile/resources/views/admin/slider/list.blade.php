
<!DOCTYPE html>
<html lang="en">
{{--<meta name="csrf-token" content="{{csrf_token()}}">--}}
{{--<script src="/ckeditor/ckeditor.js"></script>--}}
<head>
    @include('admin.head')
</head>
<body>
<form action="" method="post">
    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item  ">
                        <li class="sidebar-item active ">
                            <a href="http://127.0.0.1:8001/admin" class='sidebar-link'>
                                <i class="bi bi-backspace-fill"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="http://127.0.0.1:8001/admin/sliders/add" class='sidebar-link'>
                                <i class="bi bi-save-fill"></i>
                                <span>Thêm sliders</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <table class="table custom-control" style="font-size: small" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên slider</th>
                    <th>Link liên kết</th>
                    <th>Ảnh </th>
                    <th>Trạng thái</th>
                    <th>Ngày cập nhật</th>
                    <th>&nbsp;</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $key => $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->name }}</td>
                        <td>{{ $slider->url }}</td>
                        <td><a href="{{ $slider->thumb }}" target="_blank">
                                <img src="{{ $slider->thumb }}" height="40px">
                            </a>
                        </td>
                        <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                        <td>{{ $slider->updated_at }}</td>
                        <td>&nbsp;</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}">
                                Sửa
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                               onclick="removeRow({{ $slider->id }}, '/admin/sliders/destroy')">
                                Xoá
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $sliders->links() !!}
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; DyanMVP</p>
                    </div>
                    <div class="float-end">
                        <p>Desgin <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://facebook.com/youth.xii">DyanMVP</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @csrf
</form>

@include('admin.footer')
</body>
<script src="/template/admin/js/main.js"></script>

</html>
