<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Trang đăng ký tài khoản">
  <meta name="author" content="Admin">
  <title>Đăng ký</title>
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Đăng ký</div>
      <div class="card-body">
        <form action="index.php?controllers=register&action=dang_ky" method="POST">
          <div class="form-group">
            <!-- Hiển thị thông báo lỗi nếu có -->
            <?php if (isset($thatbai)) { echo "<div class='alert alert-danger'>$thatbai</div>"; } ?>
            <div class="form-label-group">
              <input type="text" id="inputUsername" name="txtUsername" class="form-control" placeholder="Tên tài khoản" required>
              <label for="inputUsername">Tên tài khoản</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="txtPassword" class="form-control" placeholder="Mật khẩu" required>
                  <label for="inputPassword">Mật khẩu</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="txtCfPassword" class="form-control" placeholder="Nhập lại mật khẩu" required>
                  <label for="confirmPassword">Nhập lại mật khẩu</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email" required>
              <label for="inputEmail">Email</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputPhone" name="txtPhone" class="form-control" placeholder="Số điện thoại" required>
              <label for="inputPhone">Số điện thoại</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputAddress" name="txtAddress" class="form-control" placeholder="Địa chỉ" required>
              <label for="inputAddress">Địa chỉ</label>
            </div>
          </div>

          <div class="form-group">
            <label for="role">Vai trò:</label>
            <select name="txtRole" id="role" class="form-control" required>
              <option value="Admin">Admin</option>
              <option value="Sinh Viên">Sinh Viên</option>
              <option value="Nhân Viên">Nhân Viên</option>
            </select>
          </div>

          <input type="submit" name="Dangky" class="btn btn-primary btn-block" value="Đăng ký">
        </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="index.php?controllers=login">Đăng nhập</a>
          <a class="d-block small" href="index.php?controllers=login&action=quen_mk">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>
  <script src="bootstraps/vendor/jquery/jquery.min.js"></script>
  <script src="bootstraps/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstraps/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
