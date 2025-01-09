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
    <form method="post" action="http://localhost/Quanlytotnghiep/chungchi/themmoi">
        <div class="form-group">
            <label for="maCC" style="color: yellow;">Mã chứng chỉ</label>
            <input type="text" id = "maCC" class="form-control dd1" placeholder="Mã chứng chỉ" name="txtMaCC" value="<?php if(isset($data['macc'])) echo $data['macc'] ?>">
            <label for="tenCC" style="color: yellow;">Tên chứng chỉ</label>
            <input type="text" id="tenCC" class="form-control" placeholder="Tên chứng chỉ" name="txtTenCC" value="<?php if(isset($data['tencc'])) echo $data['tencc'] ?>">
            <label for="ngayCap" style="color: yellow;">Ngày cấp</label>
            <input type="date" id="ngayCap" class="form-control" placeholder="Ngày cấp" name="txtNgayCap" value="<?php if(isset($data['ngaycap'])) echo $data['ngaycap'] ?>">
            <label for="loaiCC" style="color: yellow;">Chứng chỉ</label>
            <select name="txtLoaiCC" id="loaiCC" class="form-control">
                <option value="" disabled selected>---Chọn loại chứng chỉ---</option>
                <option value="Tiếng Anh" <?php if(isset($data['loaicc']) && $data['loaicc']=='Tiếng Anh') echo 'selected' ?>>Tiếng Anh</option>
                <option value="Tin Học" <?php if(isset($data['loaicc']) && $data['loaicc']=='Tin Học') echo 'selected' ?>>Tin Học</option>
                <option value="Khác" <?php if(isset($data['loaicc']) && $data['loaicc']=='Khác') echo 'selected' ?>>Khác</option>
            </select>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
            <a href="http://localhost/Quanlytotnghiep/Quanlychungchi" class="button-link">Quay lại</a>
        </div>
    </form>
</body>
</html>