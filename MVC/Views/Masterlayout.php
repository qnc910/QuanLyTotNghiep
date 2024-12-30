<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Quản lý tốt nghiệp</title>
    <link rel="shortcut icon" href="./Public/Picture/utt_logo.png" />

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- Our files -->
    <link rel="stylesheet" href="http://localhost/Admin/Public/Css/admin/style.css">
    <link rel="stylesheet" href="http://localhost/Admin/Public/Css/admin/progress.css">
</head>

<body>
    <header>
        <h2>SmartPhone Store - Admin</h2>
    </header>

    <!-- Menu -->
    <aside class="sidebar">
        <ul class="nav">
            <li class="nav-title">MENU</li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'home_v') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/home"><i class="fa fa-home"></i>
                    Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'list_product_v') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/list_product"><i class="fa fa-th-large"></i> Sản Phẩm</a>
            </li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'list_order_v') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/list_order"><i class="fa fa-file-text-o"></i> Đơn Hàng</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'list_account_v') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/list_account" style="text-decoration:none;"><i
                        class="fa fa-address-book-o"></i> Tài Khoản </a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'import_export_v') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/import_export" style="text-decoration:none;"><i
                        class="fa fa-upload"></i> Nhập/Xuất file</a></li>
            <li class="nav-item"><a class="nav-link <?php echo ($data['page'] == 'list_supplier') ? 'active' : ''; ?>"
                    href="http://localhost/Admin/list_supplier" style="text-decoration:none;"><i
                        class="fa fa-address-book-o"></i> Nhà cung cấp</a></li>
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