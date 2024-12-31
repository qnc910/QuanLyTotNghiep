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
    tr:hover {
        background-color:rgb(37, 106, 92); /* Màu nền khi hover */
    }
</style>

<body>
    <form method="post" action="http://localhost/Quanlytotnghiep/quanlybangcap/timkiem">
        <div class="form-inline">
            <label style="color: yellow">Mã bằng</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMabang" value="<?php if(isset($data['Mabang'])) echo $data['Mabang'] ?>">
            <label style="color: yellow">Mã sinh viên</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtMasinhvien" value="<?php if(isset($data['Masinhvien'])) echo $data['Masinhvien'] ?>">
            <label style="color: yellow">Ngành học</label>
            <input style="width: 250px;" type="text" class="form-control" name="txtNganhhoc" value="<?php if(isset($data['Nganhhoc'])) echo $data['Nganhhoc'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem"><i class="fas fa-search search-icon"></i>Tìm kiếm</button>
        </div>
        <br>
        <table class="table-header" style="overflow:auto;">
            <thead>
                <tr>
                    <th style="color: white; width:fit-content">STT</th>
                    <th style="color: white; width:fit-content">Mã bằng</th>
                    <th style="color: white; width:fit-content">Mã sinh viên</th>
                    <th style="color: white; width:fit-content">Tên sinh viên</th>
                    <th style="color: white; width:fit-content">Ngành học</th>
                    <th style="color: white; width:fit-content">Loại bằng</th>
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
               ?> -->
               <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 1 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT001" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "73DCTT23218" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Tạ Văn Mạnh Đức" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Cử nhân" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 2 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT002" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "73DCTT22124" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Mai Thế Dân" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Thạc sĩ" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 3 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "KT001" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "73DCTT23242" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Nguyễn Trà My" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Kế toán" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Cử nhân" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 4 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT003" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "73DCTT2322" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Trần Lê Minh" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Cử nhân" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
                <tr style="width: auto;">
                        <td style="color: white; text-align: center;"><?php echo 1 ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT004" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "73DCTT23221" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Nguyễn Tuấn An" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "CNTT" ?></td>
                        <td style="color: white; text-align: center;"><?php echo "Cử nhân" ?></td>
                        <td style="text-align: center;">
                            <a href="http://localhost/Quanlytotnghiep/quanlybangcap/sua/<?php echo $row['Mabang'] ?>"><img src="" alt="">✏️</a>
                        </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>