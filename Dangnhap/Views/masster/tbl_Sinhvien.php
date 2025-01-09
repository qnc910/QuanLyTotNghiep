<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Bảng điều khiển</a>
      </li>
      <li class="breadcrumb-item active">Danh sách sinh viên</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Tất cả sinh viên
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Lớp</th>
                <th>Khoa</th>
                <th>Thao tác</th> <!-- Thêm cột Thao tác -->
              </tr>
            </thead>
            <tbody>
              <?php
                $STT = 0;
                if ($list_sv != 0) {
                  foreach ($list_sv as $value) {
                    $STT++;
              ?>
              <tr>
                <td><?php echo $STT; ?></td>
                <td><?php echo $value['masv']; ?></td>
                <td><?php echo $value['hoten']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($value['ngaysinh'])); ?></td>
                <td><?php echo $value['lop']; ?></td>
                <td><?php echo $value['khoa']; ?></td>
                <td>
                  <a href="index.php?controllers=quanly&action=Edit&maSV=<?php echo $value['masv']; ?>" title="Sửa">
                    <i class="fas fa-edit"></i> 
                  </a>
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" 
                     href="index.php?controllers=quanly&action=Delete&maSV=<?php echo $value['masv']; ?>" title="Xóa">
                    <i class="fas fa-trash-alt"> </i>
                  </a>
                </td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
