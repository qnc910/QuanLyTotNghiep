<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/Quanlytaikhoan/suadl">
        <div class="form-group">
        <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>
            <label for="tentk">Tên đăng nhập</label>
            <input type="text" id = "tentk" class="form-control dd1" placeholder="Tên đăng nhập" name="txtTendangnhap" value="<?php echo $row['tenTK'] ?>">
            <label for="matkhau">Mật khẩu</label>
            <input type="text" id="matkhau" class="form-control" placeholder="Mật khẩu" name="txtMatkhau" value="<?php echo $row['matKhau'] ?>">
            <select name="txtVaitro" id="vaitro" class="form-control">
                <option value="">---Chọn vai trò---</option>
                <option value="1" <?php if ($data['vaiTro']=='1') echo 'selected' ?>>Sinh viên</option>
                <option value="2" <?php if ($data['vaiTro']=='2') echo 'selected' ?>>Nhân viên</option>
                <option value="3" <?php if ($data['vaiTro']=='3') echo 'selected' ?>>Admin</option>
            </select>
            <label for="myEmail">Email</label>
            <input type="email" id="myEmail" class="form-control" placeholder="Email" name="txtEmail" value="<?php echo $row['email'] ?>">
            <label for="myPhone">Số điện thoại</label>
            <input type="tel" id="myPhone" class="form-control" placeholder="Số điện thoại" name="txtSodienthoai" value="<?php echo $row['sdt'] ?>">
            <label for="diachi">Địa chỉ</label>
            <input type="text" id="diachi" class="form-control" placeholder="Địa chỉ" name="txtDiachi" value="<?php echo $row['diaChi'] ?>">
            <?php        
                }
            }
            ?>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </div>
    </form>
</body>
</html>