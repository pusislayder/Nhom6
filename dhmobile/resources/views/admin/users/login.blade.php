
<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.head')
</head>
<body>

<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="/template/admin/dist/assets/images/logo/logo.jpeg" alt="Logo"></a>
                </div>
                <h1 class="auth-title">DH Mobile</h1>
                <p class="auth-subtitle mb-3"> Authorized Reseller</p>
                @include('admin.alert')
                <form action="/admin/users/login/store" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="email" class="form-control form-control-xl" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" name="remember" id="remember">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Nhớ mật khẩu
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Đăng nhập</button>
                    @csrf
                </form>

            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</div>
</body>

</html>
