<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/73dctt23_MVC/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/73dctt23_MVC/Public/Css/dinhdang7.css">
    <script src="http://localhost/73dctt23_MVC/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/73dctt23_MVC/Public/Js/popper.min.js"></script>
    <script src="http://localhost/73dctt23_MVC/Public/Js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="header1">
            <img src="./Public/Pictures/logo.png" alt="">
        </div>
        <div class="menu1" style="background: green; height:58px; font-size:18px;">
            <nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded">
                <ul class="navbar-nav mr-autoavbar">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Đăng nhập</a>
                    </li>
                   
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Thoát</a>
                    </li>
                </ul>
                <!-- Navbar-nav with FORM 
                <ul class="navbar-nav ml-auto" style="text-align: right;">
                    <form class="form-inline" action="/somepage">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </ul> -->
      </nav>
        </div>
        <div class="row">
            <div class="menu_left1" style="width: 250px;">
                <div class="list-group">
                    <a style="background: #e7e4e4;font-weight:bold;text-align:left;" href = "#" class = "list-group-item btn btn-link" data-toggle="collapse" data-target="#target1">Quản lý thông tin</a>
                    <div class="collapse" id="target1">
                        <a href = "./danhsachtacgia" class = "list-group-item">Loại sách</a> 
                        <a href = "#" class = "list-group-item">Nhà xuất bản</a>
                        <a href = "#" class = "list-group-item ">Tác giả</a>
                        <a href = "#" class = "list-group-item">Sách</a>
                        <a href = "#" class = "list-group-item">Độc giả</a>
                        <a href = "#" class = "list-group-item">Nhân viên</a>
                    </div>
<a style="background: #e7e4e4; font-weight:bold;text-align:left;" href = "#" class = "list-group-item btn btn-link" data-toggle="collapse" data-target="#target2">Quản lý nghiệp vụ</a>
                    <div class="collapse" id="target2">
                        <a href = "#" class = "list-group-item">Thẻ độc giả</a>
                        <a href = "#" class = "list-group-item">Gia hạn thẻ</a>
                        <a href = "#" class = "list-group-item">Mượn sách</a>
                        <a href = "#" class = "list-group-item">Trả sách</a>
                        <a href = "#" class = "list-group-item">Gia hạn mượn</a>
                    </div>
                    <a style="background:#e7e4e4;font-weight:bold;text-align:left;"#e7e4e4; href = "#" class = "list-group-item btn btn-link" data-toggle="collapse" data-target="#target3">Báo cáo và thống kê</a>
                    <div class="collapse" id="target3">
                        <a href = "#" class = "list-group-item">Độc giả mượn sách quá hạn</a>
                        <a href = "#" class = "list-group-item">Sách</a>
                        <a href = "#" class = "list-group-item">Độc giả</a>
                    </div>
                </div>
            </div>
        <div class="content1">
                <?php
                    include_once './MVC/Views/Pages/'.$data['page'].'.php';
                ?>
        </div>
        <div class="footer1">
              
        </div>
    </div>
    
</body>
</html>