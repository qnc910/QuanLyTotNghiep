<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/chungchi/themmoi">
        <div class="form-group">
            <label for="maCC">Mã chứng chỉ</label>
            <input type="text" id = "maCC" class="form-control dd1" placeholder="Mã chứng chỉ" name="txtMaCC" value="<?php if(isset($data['macc'])) echo $data['macc'] ?>">
            <label for="tenCC">Tên chứng chỉ</label>
            <input type="text" id="tenCC" class="form-control" placeholder="Tên chứng chỉ" name="txtTenCC" value="<?php if(isset($data['tencc'])) echo $data['tencc'] ?>">
            <label for="ngayCap">Ngày cấp</label>
            <input type="date" id="ngayCap" class="form-control" placeholder="Ngày cấp" name="txtNgayCap" value="<?php if(isset($data['ngaycap'])) echo $data['ngaycap'] ?>">
            <select name="txtLoaiCC" id="loaiCC" class="form-control">
                <option value="" disabled selected>---Chọn loại chứng chỉ---</option>
                <option value="Tiếng Anh" <?php if(isset($data['loaicc']) && $data['loaicc']=='Tiếng Anh') echo 'selected' ?>>Tiếng Anh</option>
                <option value="Tin Học" <?php if(isset($data['loaicc']) && $data['loaicc']=='Tin Học') echo 'selected' ?>>Tin Học</option>
                <option value="Khác" <?php if(isset($data['loaicc']) && $data['loaicc']=='Khác') echo 'selected' ?>>Khác</option>
            </select>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </div>
    </form>
</body>
</html>