<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- Our files -->
    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Css/style.css">
    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Css/progress.css">
    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Css/bootstrap.min.css">
    <script src="http://localhost/Quanlytotnghiep/Public/Js/bootstrap.min.js"></script>
    <script src="http://localhost/Quanlytotnghiep/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/Quanlytotnghiep/Public/Js/popper.min.js"></script>
    <style>
        .button-link {
            display: inline-block;
            padding: 8px 8px;
            background-color: #007BFF; /* Màu nền */
            color: white; /* Màu chữ */
            text-decoration: none; /* Xóa gạch chân */
            border-radius: 5px; /* Bo tròn góc */
        }
    </style>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/Quanlytaikhoan/suadl">
        <div class="form-group">
        <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>
            <label for="tentk" style="color: yellow;">Tên đăng nhập</label>
            <input type="text" id = "tentk" class="form-control dd1" placeholder="Tên đăng nhập" name="txtTendangnhap" value="<?php echo $row['tenTK'] ?>">
            <label for="matkhau" style="color: yellow;">Mật khẩu</label>
            <input type="text" id="matkhau" class="form-control" placeholder="Mật khẩu" name="txtMatkhau" value="<?php echo $row['matKhau'] ?>">
            <label for="vaitro" style="color: yellow;">Vai trò</label>
            <select name="txtVaitro" id="vaitro" class="form-control">
                <option value="" disabled>---Chọn vai trò---</option>
                <option value="Sinh viên" <?php if ($row['vaiTro']=='Sinh viên') echo 'selected' ?>>Sinh viên</option>
                <option value="Nhân viên" <?php if ($row['vaiTro']=='Nhân viên') echo 'selected' ?>>Nhân viên</option>
                <option value="Admin" <?php if ($row['vaiTro']=='Admin') echo 'selected' ?>>Admin</option>
            </select>
            <label for="myEmail" style="color: yellow;">Email</label>
            <input type="email" id="myEmail" class="form-control" placeholder="Email" name="txtEmail" value="<?php echo $row['email'] ?>">
            <label for="myPhone" style="color: yellow;">Số điện thoại</label>
            <input type="tel" id="myPhone" class="form-control" placeholder="Số điện thoại" name="txtSodienthoai" value="<?php echo $row['sdt'] ?>">
            <label for="diachi" style="color: yellow;">Địa chỉ</label>
            <input type="text" id="diachi" class="form-control" placeholder="Địa chỉ" name="txtDiachi" value="<?php echo $row['diaChi'] ?>">
            <?php        
                }
            }
            ?>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
            <a href="http://localhost/Quanlytotnghiep/Quanlytaikhoan" class="button-link">Quay lại</a>
        </div>
    </form>
</body>
</html>