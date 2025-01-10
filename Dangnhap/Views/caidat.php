<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Cài đặt tài khoản">
  <meta name="author" content="Admin">
  <title>Cài đặt tài khoản</title>
  <!-- Font Awesome và Bootstrap -->
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php require_once 'masster/header.php'; ?>
  <div id="wrapper">
    <?php require_once 'masster/footer.php'; ?>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cài đặt tài khoản</div>
        <?php if (isset($thatbai)) { echo "<span style='color:red;'>".$thatbai."</span>"; } ?>
        <div class="card-body">
          <form action="#" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUsername" name="tentk" class="form-control" placeholder="Tên tài khoản" value="<?php echo $value['tenTK']; ?>" required>
                <label for="inputUsername">Tên tài khoản</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="matkhau" class="form-control" placeholder="Mật khẩu" value="<?php echo $value['matKhau']; ?>" required>
                <label for="inputPassword">Mật khẩu</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" value="<?php echo $value['email']; ?>" required>
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputPhone" name="sdt" class="form-control" placeholder="Số điện thoại" value="<?php echo $value['sdt']; ?>" required>
                <label for="inputPhone">Số điện thoại</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputAddress" name="diachi" class="form-control" placeholder="Địa chỉ" value="<?php echo $value['diaChi']; ?>" required>
                <label for="inputAddress">Địa chỉ</label>
              </div>
            </div>
            <div class="form-group">
              <label for="role">Vai trò:</label>
              <select name="vaitro" id="role" class="form-control">
                <option value="Admin" <?php if ($value['vaiTro'] == 'Admin') echo 'selected'; ?>>Admin</option>
                <option value="Sinh Viên" <?php if ($value['vaiTro'] == 'Sinh Viên') echo 'selected'; ?>>Sinh viên</option>
                <option value="Nhân Viên" <?php if ($value['vaiTro'] == 'Nhân Viên') echo 'selected'; ?>>Nhân viên</option>
              </select>
            </div>
            <input type="submit" name="Luu" class="btn btn-primary btn-block" value="Lưu lại">
            <div class="text-center">
              <a class="d-block small mt-3" href="index.php?controllers=login&action=Xoa_tk">Xóa tài khoản</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
