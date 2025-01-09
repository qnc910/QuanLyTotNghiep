<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Quản lý tốt nghiệp</title>

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
    <header>
        <h2>Quản lý tốt nghiệp <img src="http://localhost/Quanlytotnghiep/Public/Pictures/utt_logo.png" alt="UTT" style="width: 25px; height: 25px ;"/></h2>
    </header>

    <!-- Menu -->
    <aside class="sidebar">
        <ul class="nav">
            <li class="nav-title">MENU</li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'home_v') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/home_admin"><i class="fa fa-home"></i>
                    Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'quanlybangcap_v') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/quanlytaikhoan"><i class="fa fa-th-large"></i>Quản lý tài khoản</a>
            </li>
            <li class="nav-item">
                <hr>
            </li>
            <li class="nav-item">
                <a href="http://localhost/Quanlytotnghiep/Dangnhap" class="nav-link" onclick="logOutAdmin(); return true;">
                    <i class="fa fa-arrow-left"></i>
                    Đăng xuất
                </a>
            </li>
        </ul>
    </aside>

    <!-- Khung hiển thị chính -->
    <div class="main">
        <?php
                include_once  './MVC/Views/Pages/' . $data['page'] . '.php';
            ?>
    </div>
</body>

</html>