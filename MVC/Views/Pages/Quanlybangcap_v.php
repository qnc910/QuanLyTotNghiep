<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bằng cấp</title>

    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Css/style.css">
    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Css/progressprogress.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</head>

<style>
    .mid{
        width: 70%;
        margin: 0 auto;
        padding-top: 20px;
    }
    .add {
        padding: 5px 10px;
        border: 3px solid transparent;
        background-color: black;
    }

    .add:hover {
        background-color: green;
    }

    .add a {
        font-family: Arial, Helvetica, sans-serif;
    }
    tr:hover {
        background-color:rgb(37, 106, 92); /* Màu nền khi hover */
    }
</style>

<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/quanlybangcap/timkiem">
        <div class="form-inline mid">
            <label style="color: yellow; margin-right: 5px;">Mã bằng: </label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMabang" value="<?php if(isset($data['mabang'])) echo $data['mabang'] ?>"> &nbsp;
            <label style="color: yellow; margin-right: 5px;">Mã sinh viên: </label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMasinhvien" value="<?php if(isset($data['masv'])) echo $data['masv'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem"><i class="fas fa-search search-icon"></i>Tìm kiếm</button>
        </div>
        <br>
        <table class="table-header" style="overflow:auto;">
            <thead>
                <tr>
                    <th style="color: white; width:fit-content">STT</th>
                    <th style="color: white; width:fit-content">Mã bằng</th>
                    <th style="color: white; width:fit-content">Mã sinh viên</th>
                    <th style="color: white; width:fit-content">Hình thức đào tạo</th>
                    <th style="color: white; width:fit-content">Ngày cấp</th>
                    <th style="color: white; width:fit-content">Ngày ký</th>
                    <th style="color: white; width:fit-content">Xếp loại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
                    $i=0;
                    while($row = mysqli_fetch_assoc($data['dulieu'])){
                ?>
                    <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo ++$i ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['maBang'] ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['maSV'] ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['hinhthucDT'] ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['ngayCap'] ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['ngayKy'] ?></td>
                        <td style="color: white; text-align: center;"><?php echo $row['xepLoai'] ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['maBang'] ?>"><img src="" alt="">✏️</a>
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