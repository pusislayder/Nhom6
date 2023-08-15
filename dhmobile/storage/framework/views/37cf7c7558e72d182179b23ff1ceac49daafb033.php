
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
            <div class="customer mt-3">
                <ul>
                    <li>Tên khách hàng: <strong><?php echo e($customer->name); ?></strong></li>
                    <li>Số điện thoại: <strong><?php echo e($customer->phone); ?></strong></li>
                    <li>Địa chỉ: <strong><?php echo e($customer->address); ?></strong></li>
                    <li>Email: <strong><?php echo e($customer->email); ?></strong></li>
                    <li>Ghi chú: <strong><?php echo e($customer->content); ?></strong></li>
                </ul>
            </div>

            <div class="carts">
                <?php $total = 0; ?>
                <table class="table">
                    <tbody>
                    <tr class="table_head">
                        <th class="column-1">IMG</th>
                        <th class="column-2">Product</th>
                        <th class="column-3">Price</th>
                        <th class="column-4">Quantity</th>
                        <th class="column-5">Total</th>
                    </tr>

                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $price = $cart->price * $cart->pty;
                            $total += $price;
                        ?>
                        <tr>
                            <td class="column-1">
                                <div class="how-itemcart1">
                                    <img src="<?php echo e($cart->product->thumb); ?>" alt="IMG" style="width: 100px">
                                </div>
                            </td>
                            <td class="column-2"><?php echo e($cart->product->name); ?></td>
                            <td class="column-3"><?php echo e(number_format($cart->price, 0, '', '.')); ?></td>
                            <td class="column-4"><?php echo e($cart->pty); ?></td>
                            <td class="column-5"><?php echo e(number_format($price, 0, '', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="4" class="text-right">Tổng Tiền</td>
                        <td><?php echo e(number_format($total, 0, '', '.')); ?></td>
                    </tr>
                    </tbody>
                </table>
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
    <?php echo csrf_field(); ?>
</form>

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script src="/template/admin/js/main.js"></script>



</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/dhmobile/resources/views/admin/carts/detail.blade.php ENDPATH**/ ?>