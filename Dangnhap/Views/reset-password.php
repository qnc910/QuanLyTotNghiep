<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Đặt lại mật khẩu</title>
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đặt lại mật khẩu</div>
      <div class="card-body">
        <form action="index.php?controllers=login&action=reset_password" method="POST">
          <input type="hidden" name="txtEmail" value="<?php echo htmlspecialchars($_POST['txtEmail']); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="new_password" id="inputPassword" class="form-control" placeholder="Nhập mật khẩu mới" required>
              <label for="inputPassword">Nhập mật khẩu mới</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Đặt lại mật khẩu</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
