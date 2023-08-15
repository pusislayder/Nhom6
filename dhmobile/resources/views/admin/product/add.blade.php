
<!DOCTYPE html>
<html lang="en">

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
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-item  ">
                            <li class="sidebar-item active ">
                                <a href="http://127.0.0.1:8001/admin" class='sidebar-link'>
                                    <i class="bi bi-backspace-fill"></i>
                                    <span>Quay lại</span>
                                </a>
                            </li>
                            <li class="sidebar-item active ">
                                <a href="http://127.0.0.1:8001/admin/products/list" class='sidebar-link'>
                                    <i class="bi bi-list"></i>
                                    <span>Danh sách sản phẩm</span>
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

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Thêm sản phẩm mới</h3>
                                <p class="text-subtitle text-muted">Bạn vui lòng điền đầy dủ và chính xác các thông tin vào các ô dưới đây. Vui lòng không được để trống.</p>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thông tin nhập vào</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}"  placeholder="Nhập tên sản phẩm">
                                        </div>
                                        @include('admin.alert')
                                        <label>Danh mục</label>
                                        <select class="form-select" name="menu_id">
                                            @foreach($menus ?? '' as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endforeach
                                        </select>

                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea name="description"  class="form-control" >{{old('description')}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Mô tả chi tiết</label>
                                            <textarea name="content" id="content" class="form-control" >{{old('content')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input type="number" name="price" class="form-control"  id="menu" value="{{old('price')}}" placeholder="Nhập giá sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá khuyến mãi</label>
                                            <input type="number" name="price_sale"  class="form-control" id="menu" value="{{old('price_sale')}}" placeholder="Nhập giá khuyễn mãi">
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input type="number" name="quantity"  class="form-control"  value="{{old('quantity')}}" placeholder="Nhập số lượng">
                                        </div>
                                        <div class="mb-3">
                                            <label for="menu" class="form-label">Ảnh sản phẩm</label>
                                            <input class="form-control" type="file" id="upload">
                                            <div class="image_show mt-3" id="image_show">

                                            </div>
                                            <input type="hidden" name="thumb" id="thumb">
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái</label>
                                            <div class="custom-control custom-radio mt-3">
                                                <input type="radio" value="1" class="form-check-input form-check-success form-check-glow" checked="" name="active" id="active">
                                                <label class="form-check-label" for="active">Hoạt động</label>
                                            </div>
                                            <div class="custom-control custom-radio mt-1">
                                                <input type="radio" value="0" class="form-check-input form-check-success form-check-glow"  name="active" id="no_active">
                                                <label class="form-check-label" for="no_active">Không hoạt động</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-1 mb-1 mt-3">Thêm sản phẩm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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

</html>
