<?php 
session_start();
require_once 'Model/dangnhap.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
		case 'dang_ky':
			if (isset($_POST['Dangky'])) {
			 $txtfirstName = $_POST['txtfirstName'];
			 $txtlastName = $_POST['txtlastName'];
			 $txtUsername = $_POST['txtUsername'];
			 $txtGender = $_POST['txtGender'];
			 $txtEmail = $_POST['txtEmail'];
			 $txtPhonenb = $_POST['txtPhone'];
			 $txtAddress = $_POST['txtAddress'];
			 $txtPassword = md5($_POST['txtPassword']);
			 $txtCfPassword = md5($_POST['txtCfPassword']);
			 $txtRole = $_POST['txtRole'];
		  
			 $txtHote = $txtfirstName." ".$txtlastName;
		  
			 if ($txtPassword == $txtCfPassword) {
			  if (Dangnhap::ADD($txtHote,$txtUsername,$txtPassword,$txtGender,$txtEmail,$txtAddress,$txtPhonenb,$txtRole)) {
			   header('location:index.php?controllers=login');
			  }
			 }
			 else
			 {
			  $thatbai = "<p style ='color:red'>* Đăng ký Thất bại do mặt khẩu nhập lại không khớt.!</p>";
			 }
			
		}	
			require_once 'Views/register.php';
			break;
		
	case 'cai_dat':
		if (isset($_GET['username'])) {
			$username = $_GET['username'];
			$user = Dangnhap::List_id($username);

			if (isset($_POST['Luu'])) {
				$txtfirstName = $_POST['txtfirstName'];
				$txtUsername = $_POST['txtUsername'];
				$txtEmail = $_POST['txtEmail'];
				$txtPassword = md5($_POST['txtPassword']);

				if (Dangnhap::Edit($txtfirstName,$txtUsername,$txtPassword,$txtEmail,$username)) {
					$_SESSION['username'] = $txtUsername;
					header('location:index.php?controllers=quanly&action=Admin');
				}
				else
				{
					$thatbai = "Lưu thất bại.!";
				}
			}
		}
		foreach ($user as $value) {
			# code...
		}
		require_once 'Views/caidat.php';
		break;
	
	case 'Xoa_tk':
		if ($_SESSION["username"]) {
			$text_username = $_SESSION["username"];
			if (Dangnhap::Delete($text_username)) {
				session_destroy();
				header('location:index.php');
			}
		}
		break;

	case 'quen_mk':
		
		require_once 'Views/forgot-password.php';
		break;
	
	case 'reset_password_form':
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['txtEmail'];

        // Kiểm tra email có tồn tại
        $user = Dangnhap::CheckEmail($email);
        if ($user != 0) {
            // Nếu email tồn tại, chuyển hướng đến trang đặt lại mật khẩu
            require_once 'Views/reset-password.php';
        } else {
            echo "<p style='color:red;'>Email không tồn tại!</p>";
            require_once 'Views/forgot-password.php';
        }
    }
    break;

	case 'reset_password':
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $_POST['txtEmail'];
			$new_password = md5($_POST['new_password']);

			// Cập nhật mật khẩu trong database
			if (Dangnhap::ResetPassword($email, $new_password)) {
				echo "<p style='color:green;'>Mật khẩu đã được cập nhật thành công!</p>";
				require_once 'Views/login.php';
			} else {
				echo "<p style='color:red;'>Đặt lại mật khẩu thất bại. Vui lòng thử lại!</p>";
				require_once 'Views/reset-password.php';
			}
		}
	break;


	case 'Admin':
		if (isset($_POST['login'])) {
			$text_username = $_POST['username'];
			$text_password = $_POST['password'];
	
			// Gọi phương thức kiểm tra đăng nhập
			$list_user = Dangnhap::Login($text_username, md5($text_password)); // Kiểm tra tài khoản với mật khẩu MD5
	
			if (!empty($list_user)) {
				// Đăng nhập thành công, kiểm tra vai trò
				$user = $list_user[0]; // Giả sử `Login()` trả về danh sách người dùng, lấy người đầu tiên
				$role = $user['role']; // Lấy giá trị vai trò từ kết quả database
	
				// Lưu thông tin vào session
				$_SESSION["username"] = $text_username;
				$_SESSION["role"] = $role;
	
				// Điều hướng dựa trên vai trò
				switch ($role) {
						case 'sinhvien':
							$_SESSION["username"] = $text_username;
            				header('Location: index.php?controllers=quanly&action=Admin');
            				exit;
	
						case 'admin':
							header('Location: http://localhost/Quanlytotnghiep/home_admin');
							exit;
			
						case 'nhanvien':
							header('Location: http://localhost/Quanlytotnghiep/home');
							exit;
						default:
							echo "<p style='color:red;'>Chức vụ không hợp lệ!</p>";
							require_once 'Views/login.php';
							break;
				}
			} else {
				// Đăng nhập thất bại
				$thatbai = "<p style ='color:red'>* Tên đăng nhập hoặc Mật khẩu không đúng!</p>";
				require_once 'Views/login.php';
			}
		}
		break;
	
		case 'logout':
			require_once 'Views/logout.php';
			break;
		
		default:
			require_once 'Views/login.php';
			break;
}
 ?>

