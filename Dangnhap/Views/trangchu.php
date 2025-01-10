<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống Quản Lý Học Sinh</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/project_quanlisinhvien/Public/Css/Home.css">
    <link rel="stylesheet" href="http://localhost/project_quanlisinhvien/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- JavaScript -->
    <script src="http://localhost/project_quanlisinhvien/Public/Js/popper.min.js"></script>
    <script src="http://localhost/project_quanlisinhvien/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/project_quanlisinhvien/Public/Js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Header -->
    <header class="header bg-primary text-white py-3" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="d-flex w-100 align-items-center">
            <div class="logo fs-4 fw-bold me-auto">Trang Chủ Sinh Viên</div>
            <nav class="nav">
                <ul class="d-flex list-unstyled mb-0">
                    <li><a href="#" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#logoutModal">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <!-- Layout Container -->

    <!-- Sidebar -->
    <aside class="bg text-white" style="position: fixed; top: 60px; left: 0; bottom: 0; width: 250px; background-color: #243d55; height: 100vh; overflow-y: auto;">
        <div class="p-3">
            <h5 class="mb-4">Chức Năng</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a href="http://localhost/project_quanlisinhvien/student_registration" class="nav-link text-white">
                        <i class="bi bi-pencil-square"></i> Cập nhật thông tin chứng chỉ
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="http://localhost/Quanlytotnghiep/Quanlychungchi" class="nav-link text-white">
                        <i class="bi bi-clipboard"></i> Tra cứu thông tin chứng chỉ
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="http://localhost/Quanlytotnghiep/quanlybangcap" class="nav-link text-white">
                        <i class="bi bi-book"></i> Tra cứu thông tin bằng tốt nghiệp
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 250px; padding: 20px; height: calc(100vh - 70px); overflow-y: auto; margin-top: 70px;">
        <?php
        if (isset($data['page'])) {
            include_once './MVC/Views/Pages_student/' . basename($data['page']) . '.php';
        }
        ?>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-2" style="position: fixed; bottom: 0; left: 0; width: 100%;">
        <p class="mb-0">&copy; 2024 Student Management System. All rights reserved.</p>
    </footer>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng đang xuất?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn có chắc chắn muốn đăng xuất tài khoản không?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="http://localhost/Quanlytotnghiep/Dangnhap/">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
localhost