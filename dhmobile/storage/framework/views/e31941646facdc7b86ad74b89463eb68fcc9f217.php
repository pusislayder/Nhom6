
<!DOCTYPE html>
<html lang="en">


<head>
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <span>Quay lại</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="http://127.0.0.1:8001/admin/products/add" class='sidebar-link'>
                                <i class="bi bi-subtract"></i>
                                <span>Thêm sản phẩm</span>
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
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá gốc</th>
                    <th>Giá khuyến mãi</th>
                    <th>Số lượng</th>
                    <th>Trạng thái</th>
                    <th>Ngày cập nhật</th>
                    <th>&nbsp;</th>
                    <th>Thao tác</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product -> id); ?></td>
                        <td><?php echo e($product -> name); ?></td>
                        <td>
                            <div id="image_show" class="custom-control">
                                <a href="<?php echo e($product->thumb); ?>" target="_blank">
                                    <img src="<?php echo e($product->thumb); ?>" width="30px" height="35px">
                                </a>
                            </div>
                            <input type="hidden" name="thumb" value="<?php echo e($product->thumb); ?>" id="thumb">
                        </td>
                        <td><?php echo e($product -> menu->name); ?></td>
                        <td><?php echo e($product -> price); ?></td>
                        <td><?php echo e($product -> price_sale); ?></td>
                        <td><?php echo e($product -> quantity); ?></td>
                        <td><?php echo \App\Helpers\Helper::active($product->active); ?></td>
                        <td><?php echo e($product -> updated_at); ?></td>
                        <td style="width: 10px">&nbsp;</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/products/edit/<?php echo e($product->id); ?>">
                                Sửa
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                               onclick="removeRow(<?php echo e($product->id); ?>, '/admin/products/destroy')">
                                Xoá
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
                <?php echo $products->links(); ?>

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
    <?php echo csrf_field(); ?>
</form>

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script src="/template/admin/js/main.js"></script>



</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/dhmobile/resources/views/admin/product/list.blade.php ENDPATH**/ ?>