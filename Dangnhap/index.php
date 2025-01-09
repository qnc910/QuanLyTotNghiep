<?php 
require_once 'Connect/connect.php';
Database_ql_taikhoan::Connect();
if (isset($_GET['controllers'])) {
	$controllers = $_GET['controllers'];
}
else
{
	$controllers = NULL;
}
switch ($controllers) {
	case 'login':
		require_once 'Controllers/Login/dangnhap.php';
		break;
	case 'quanly':
		require_once 'Controllers/Quanly/Bang.php';
		break;
	default:
		// echo "controllers không tồn tại";
		require_once 'Controllers/Login/dangnhap.php';
		break;
}

 ?>