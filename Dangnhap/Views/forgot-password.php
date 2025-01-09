<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quên mật khẩu</title>
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đặt lại mật khẩu</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Quên mật khẩu?</h4>
          <p>Nhập email của bạn để đặt lại mật khẩu.</p>
        </div>
        <form action="index.php?controllers=login&action=reset_password_form" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="txtEmail" id="inputEmail" class="form-control" placeholder="Nhập email" required autofocus>
              <label for="inputEmail">Nhập email</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Tiếp tục</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php?controllers=login&action=dang_ky">Tạo tài khoản</a>
          <a class="d-block small" href="index.php?controllers=login">Đăng nhập</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
