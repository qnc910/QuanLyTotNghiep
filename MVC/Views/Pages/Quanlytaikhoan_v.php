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
    .button {
        display: inline-block; /* Để nút có thể tự động điều chỉnh chiều dài */
        padding: 10px 20px;   /* Khoảng cách bên trong */
        font-size: 16px;      /* Kích thước chữ */
        color: white;         /* Màu chữ */
        background-color: #007BFF; /* Màu nền */
        text-decoration: none; /* Bỏ dấu gạch chân */
        border-radius: 5px;   /* Bo góc */
        transition: background-color 0.3s; /* Hiệu ứng chuyển màu */
    }

    .button:hover {
        background-color: #0056b3; /* Màu nền khi di chuột qua */
    }
    tr:hover {
        background-color:rgb(37, 106, 92); /* Màu nền khi hover */
    }
</style>

<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/quanlytaikhoantaikhoan/timkiem">
        <div class="form-inline">
            <label style="color: yellow">Tên đăng nhập</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtTendangnhap" value="<?php if(isset($data['Tendangnhap'])) echo $data['Masinhvien'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem"><i class="fas fa-search search-icon"></i>Tìm kiếm</button>
        </div>
        <br>
        <a href="http://localhost/Quanlytotnghiep/quanlychungchi/themmoi" class="button">Thêm</a>
        <br>
        <table class="table-header" style="overflow:auto;">
            <thead>
                <tr>
                    <th style="color: white">STT</th>
                    <th style="color: white">Tên đăng nhập</th>
                    <th style="color: white">Mật khẩu</th>
                    <th style="color: white">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
               <!-- <?php
                if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
                    $i=0;
                    while($row = mysqli_fetch_assoc($data['dulieu'])){
                ?>
                    <tr style="width: auto;">
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['Tendangnhap'] ?></td>
                        <td><?php echo $row['Matkhau'] ?></td>
                        <td><?php echo $row['Trangthai'] ?></td>
                        <td>
                            <a href="http://localhost/Quanlytotnghiep/quanlytaikhoan/sua/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">✏️</a>
                            <a href="http://localhost/73dctt23_MVC/quanlytaikhoan/xoa/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">❌</a>
                        </td>
                    </tr>
                <?php
                    }
                }
               ?> -->
               <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 1 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "manhduc" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "123456789" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Active" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">✏️</a>
                            <a href="http://localhost/73dctt23_MVC/quanlytaikhoan/xoa/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">❌</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 2 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "dandan" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "987654321" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Active" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlytaikhoan/sua/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">✏️</a>
                            <a href="http://localhost/73dctt23_MVC/quanlytaikhoan/xoa/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">❌</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 3 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "mytra" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "123123" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Inactive" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlytaikhoan/sua/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">✏️</a>
                            <a href="http://localhost/73dctt23_MVC/quanlytaikhoan/xoa/<?php echo $row['Tendangnhap'] ?>"><img src="" alt="">❌</a>
                        </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>