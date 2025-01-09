<?php
session_start();
require_once 'Model/dangnhap.php';
require_once 'Model/sinhvien.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
	//Tìm kiếm
	case 'Search':
		if (isset($_POST['Timkiem'])) {
			$gtTimkiem = $_POST['gtTimkiem'];
			$list_sv = Sinhvien::Search($gtTimkiem);
		}
		require_once 'Views/masster/admin.php';
		break;

	// xử lý sinh viên
	case 'Add':
		if (isset($_POST['Add'])) {
			$txt_masv = $_POST['txt_masv'];
				$txt_hoten = $_POST['txt_hoten'];
				$txt_ngaysinh = $_POST['txt_ngaysinh'];
				$txt_malop = $_POST['txt_malop'];
				$txt_khoa= $_POST['txt_khoa'];

			$ngaysinh = date('Y-m-d',strtotime($txt_ngaysinh));
			 // Kiểm tra trùng lặp mã sinh viên
			 if (Sinhvien::checkTrungMa($txt_masv)) {
				$thatbai = "Mã sinh viên đã tồn tại!";
			} else {
				if (Sinhvien::Add($txt_masv, $txt_hoten, $txt_ngaysinh, $txt_malop, $txt_khoa)) {
					echo "<script>alert('Thêm sinh viên thành công');</script>";
				} else {
					$thatbai = "Thêm sinh viên thất bại";
				}
			}
			

		}
		require_once 'Views/sinhvien/Add.php';
		break;
	case 'Edit':
		if (isset($_GET['maSV'])) {
			$maSV = $_GET['maSV'];
			$list_sv = Sinhvien::GetId($maSV);

			if (isset($_POST['Edit'])) {
				$txt_masv = $_POST['txt_masv'];
				$txt_hoten = $_POST['txt_hoten'];
				$txt_ngaysinh = $_POST['txt_ngaysinh'];
				$txt_malop = $_POST['txt_malop'];
				$txt_khoa= $_POST['txt_khoa'];

				$ngaysinh = date('Y-m-d',strtotime($txt_ngaysinh));

				if (Sinhvien::Edit($txt_masv, $txt_hoten, $txt_ngaysinh, $txt_malop, $txt_khoa,$maSV)) {
				header("location:index.php?controllers=quanly&action=Admin");
			}
			else
			{
				$thatbai = "Sửa thất bại..!";
			}
				
			}
		}
		require_once 'Views/sinhvien/Edit.php';
		break;
	case 'Delete':
		if (isset($_GET['maSV'])) {
			$maSV = $_GET['maSV'];
			if (Sinhvien::Delete($maSV)) {
				header("location:index.php?controllers=quanly&action=Admin");
			}
			else
			{
				echo "Xóa thất bại..!";
			}
		}
		break;
	case 'Admin':
		$list_sv = Sinhvien::List();
		require_once 'Views/masster/admin.php';
		break;

	default:
		echo "Trang không tồn tại";
		break;
}

 ?>