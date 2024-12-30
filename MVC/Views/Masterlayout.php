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
    <link rel="stylesheet" href="http://localhost/Quanlytotnghiep/Public/Cssprogress.css">
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
                    href="http://localhost/Quanlytotnghiep/home"><i class="fa fa-home"></i>
                    Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'quanlybangcap_v') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/quanlybangcap"><i class="fa fa-th-large"></i>Quản lý bằng tốt nghiệp</a>
            </li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'quanlychungchi_v') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/quanlychungchi"><i class="fa fa-file-text-o"></i>Quản lý chứng chỉ</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'quanlysinhvien_v') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/quanlysinhvien" style="text-decoration:none;"><i
                        class="fa fa-address-book-o"></i> Thông tin sinh viên </a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'tracuu_vv') ? 'active' : ''; ?>"
                    href="http://localhost/Quanlytotnghiep/tracuu" style="text-decoration:none;"><i
                        class="fa fa-upload"></i> Tra cứu</a></li>
            <li class="nav-item">
                <hr>
            </li>
            <li class="nav-item">
                <a href="index.html" class="nav-link" onclick="logOutAdmin(); return true;">
                    <i class="fa fa-arrow-left"></i>
                    Đăng xuất (về Trang chủ)
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