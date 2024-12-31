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
</style>

<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/quanlychungchi/timkiem">
        <div class="form-inline">
            <label style="color: yellow">Mã chứng chỉ</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMabang" value="<?php if(isset($data['Mabang'])) echo $data['Mabang'] ?>">
            <label style="color: yellow">Tên chứng chỉ</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMasinhvientxtMasinhvien" value="<?php if(isset($data['Masinhvien'])) echo $data['Masinhvien'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem">Tìm kiếm</button>
        </div>
        <br>
        <a href="http://localhost/Quanlytotnghiep/quanlychungchi/themmoi" class="button">Thêm</a>
        <br>
        <table class="table-header" style="overflow:auto;">
            <thead>
                <tr>
                    <th style="color: white">STT</th>
                    <th style="color: white">Mã chứng chỉ</th>
                    <th style="color: white">Tên chứng chỉ</th>
                    <th style="color: white">Loại chứng chỉ</th>
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
                        <td><?php echo $row['Machungchi'] ?></td>
                        <td><?php echo $row['Tenchungchi'] ?></td>
                        <td><?php echo $row['Loaichungchi'] ?></td>
                        <td>
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                    </tr>
                <?php
                    }
                }
               ?> -->
               <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 1 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "TA01" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "IELTS" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Tiếng Anh" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 2 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "THVP01" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "MOS" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Tin học" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 3 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "TA02" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "TOEIC" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Tiếng Anh" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>