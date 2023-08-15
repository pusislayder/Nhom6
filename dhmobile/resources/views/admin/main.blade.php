
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="admin">DH Mobile</a>
                    </div>
                    @yield('content')
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-2">
                        <div class="avatar avatar-md">
                            <img src="/template/admin/dist/assets/images/logo/logo.jpeg">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <a href="http://facebook.com/youth.xii">
                            <h6 class="text-muted font-semibold">Xin chào</h6>
                            <h6 class="font-extrabold mb-0 mt-0">Dyan_MVP</h6>
                        </a>

                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    <li class="sidebar-item active ">
                        <a href="admin" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    @include('admin.sidebar')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Bạn trao tôi niềm tin - Tôi trao bạn chất lượng</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon yellow">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="http://facebook.com/youth.xii">
                                                <h6 class="text-muted font-semibold">Trưởng nhóm</h6>
                                                <h6 class="font-extrabold mb-0">Tạ Văn Dân</h6>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="https://www.facebook.com/bang.traitim.39904">
                                                <h6 class="text-muted font-semibold">Phó nhóm</h6>
                                                <h6 class="font-extrabold mb-0">Đỗ Minh Thu</h6>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Thành viên</h6>
                                            <h6 class="font-extrabold mb-0">Nguyễn Duy Tú</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Profile Visit</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-profile-visit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Profile Visit</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Europe</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">862</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-europe"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-success" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">America</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">375</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-america"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Indonesia</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">1025</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-indonesia"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Đánh giá</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Đánh giá</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="/template/admin/dist/assets/images/faces/5.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Hồng</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Dịch vụ sửa chữa tốt. Chủ quán đẹp trai</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="/template/admin/dist/assets/images/faces/2.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Quang</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Sản phẩm rất tốt!!!!</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/template/admin/dist/assets/images/logo/logo.jpeg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">DH Mobile</h5>
                                    <h6 class="text-muted mb-0">@dhmobile68</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Thành viên nhóm </h4>
                        </div>
                        <div class="card-content pb-4">
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="/template/admin/dist/assets/images/faces/4.jpg">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Tạ Văn Dân</h5>
                                    <h6 class="text-muted mb-0">@tadan98</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="/template/admin/dist/assets/images/faces/5.jpg">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Đỗ Minh Thu</h5>
                                    <h6 class="text-muted mb-0">@minhthu2k</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="/template/admin/dist/assets/images/faces/1.jpg">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Ng. Duy Tú</h5>
                                    <h6 class="text-muted mb-0">@duytu2k1</h6>
                                </div>
                            </div>
                            <div class="px-4">
                                <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>UTT
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Visitors Profile</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-visitors-profile"></div>
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
                    <p>Design <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://facebook.com/youth.xii">DyanMVP</a></p>
                </div>
            </div>
        </footer>
    </div>
@include('admin.footer')
</body>

</html>
