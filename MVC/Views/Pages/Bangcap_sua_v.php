<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/Quanlybangcapbangcap/suadl">
        <div class="form-group">
        <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>
            <label for="maBang">Mã bằng</label>
            <input type="text" id = "maBang" class="form-control dd1" placeholder="Mã bằng" name="txtMaBang" value="<?php echo $row['maBang'] ?>">
            <select name="txtHinhThucDT" id="hinhthucDT" class="form-control">
                <option value="" disabled>---Hình thức đào tạo---</option>
                <option value="Chính quy" <?php if ($row['hinhthucDT']=='Chính quy') echo 'selected' ?>>Chính quy</option>
                <option value="Vừa học vừa làm" <?php if ($row['hinhthucDT']=='Vừa học vừa làm') echo 'selected' ?>>Vừa học vừa làm</option>
            </select>
            <label for="ngayCap">Ngày cấp</label>
            <input type="date" id="ngayCap" class="form-control" placeholder="Ngày cấp" name="txtNgayCap" value="<?php echo $row['ngayCap'] ?>">
            <label for="ngayKy">Ngày ký</label>
            <input type="date" id="ngayKy" class="form-control" placeholder="Ngày ký" name="txtNgayKy" value="<?php echo $row['ngayKy'] ?>">
            <select name="txtXepLoai" id="xepLoai" class="form-control">
                <option value="" disabled>---Xếp loại---</option>
                <option value="Xuất sắc" <?php if ($row['loaiCC']=='Xuất sắc') echo 'selected' ?>>Xuất sắc</option>
                <option value="Giỏi" <?php if ($row['loaiCC']=='Giỏi') echo 'selected' ?>>Giỏi</option>
                <option value="Khá" <?php if ($row['loaiCC']=='Khá') echo 'selected' ?>>Khá</option>
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