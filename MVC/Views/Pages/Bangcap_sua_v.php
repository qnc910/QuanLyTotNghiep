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
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/Quanlybangcapbangcap/suadl">
        <div class="form-group">
        <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>
            <label for="maBang" style="color: yellow;">Mã bằng</label>
            <input type="text" id = "maBang" class="form-control dd1" placeholder="Mã bằng" name="txtMaBang" value="<?php echo $row['maBang'] ?>">
            <label for="hinhthucDT" style="color: yellow;">Hình thức đào tạo</label>
            <select name="txtHinhThucDT" id="hinhthucDT" class="form-control">
                <option value="" disabled>---Select---</option>
                <option value="Chính quy" <?php if ($row['hinhthucDT']=='Chính quy') echo 'selected' ?>>Chính quy</option>
                <option value="Vừa học vừa làm" <?php if ($row['hinhthucDT']=='Vừa học vừa làm') echo 'selected' ?>>Vừa học vừa làm</option>
            </select>
            <label for="ngayCap" style="color: yellow;">Ngày cấp</label>
            <input type="date" id="ngayCap" class="form-control" placeholder="Ngày cấp" name="txtNgayCap" value="<?php echo $row['ngayCap'] ?>">
            <label for="ngayKy" style="color: yellow;">Ngày ký</label>
            <input type="date" id="ngayKy" class="form-control" placeholder="Ngày ký" name="txtNgayKy" value="<?php echo $row['ngayKy'] ?>">
            <label for="xepLoai" style="color: yellow;">Xếp loại</label>
            <select name="txtXepLoai" id="xepLoai" class="form-control">
                <option value="" disabled>---Select---</option>
                <option value="Xuất sắc" <?php if ($row['xepLoai']=='Xuất sắc') echo 'selected' ?>>Xuất sắc</option>
                <option value="Giỏi" <?php if ($row['xepLoai']=='Giỏi') echo 'selected' ?>>Giỏi</option>
                <option value="Khá" <?php if ($row['xepLoai']=='Khá') echo 'selected' ?>>Khá</option>
            </select>
            <?php        
                }
            }
            ?>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </div>
    </form>
</body>
</html>