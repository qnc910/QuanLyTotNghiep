<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bằng cấp</title>
</head>
<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/quanlybangcap">
        <div class="form-inline">
            <label style="color: yellow">Mã bằng</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMabang" value="<?php if(isset($data['Mabang'])) echo $data['Mabang'] ?>">
            <label style="color: yellow">Mã sinh viên</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMasinhvientxtMasinhvien" value="<?php if(isset($data['Masinhvien'])) echo $data['Masinhvien'] ?>">
            <label style="color: yellow">Ngành học</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtNganhhoctxtNganhhoc" value="<?php if(isset($data['Nganhhoc'])) echo $data['Nganhhoc'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem">Tìm kiếm</button>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="color: white">STT</th>
                    <th style="color: white">Mã bằng</th>
                    <th style="color: white">Mã sinh viên</th>
                    <th style="color: white">Tên sinh viên</th>
                    <th style="color: white">Ngành học</th>
                    <th style="color: white">Loại bằng</th>
                </tr>
            </thead>
            <tbody>
               <?php
                if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
                    $i=0;
                    while($row = mysqli_fetch_assoc($data['dulieu'])){
                ?>
                    <tr style="width: auto;">
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['Mabang'] ?></td>
                        <td><?php echo $row['Tensinhvien'] ?></td>
                        <td><?php echo $row['Masinhvien'] ?></td>
                        <td><?php echo $row['Nganhhoc'] ?></td>
                        <td><?php echo $row['Loaibang'] ?></td>
                        <td>
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                    </tr>
                <?php
                    }
                }
               ?>
            </tbody>
        </table>
    </form>
</body>
</html>