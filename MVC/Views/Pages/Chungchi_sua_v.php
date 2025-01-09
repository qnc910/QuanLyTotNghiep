<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/Quanlychungchi/suadl">
        <div class="form-group">
        <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>
            <label for="maCC">Mã chứng chỉ</label>
            <input type="text" id = "maCC" class="form-control dd1" placeholder="Mã chứng chỉ" name="txtMaCC" value="<?php echo $row['maCC'] ?>">
            <label for="tenCC">Tên chứng chỉ</label>
            <input type="text" id="tenCC" class="form-control" placeholder="Tên chứng chỉ" name="txtTenCC" value="<?php echo $row['tenCC'] ?>">
            <label for="ngayCap">Ngày cấp</label>
            <input type="date" id="ngayCap" class="form-control" placeholder="Ngày cấp" name="txtNgayCap" value="<?php echo $row['ngayCap'] ?>">
            <select name="txtLoaiCC" id="loaiCC" class="form-control">
                <option value="" disabled>---Chọn loại chứng chỉ---</option>
                <option value="Tiếng Anh" <?php if ($row['loaiCC']=='Tiếng Anh') echo 'selected' ?>>Tiếng Anh</option>
                <option value="Tin Học" <?php if ($row['loaiCC']=='Tin Học') echo 'selected' ?>>Tin Học</option>
                <option value="Khác" <?php if ($row['loaiCC']=='Khác') echo 'selected' ?>>Khác</option>
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