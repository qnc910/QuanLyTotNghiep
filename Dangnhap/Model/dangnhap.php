<?php

require_once 'Connect/connect.php';

class Dangnhap extends Database_ql_taikhoan
{
    public static function Login($text_username, $text_password)
    {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan.username = '$text_username' AND taikhoan.password = '$text_password'";
        return parent::Getdata($sql);
    }

    public static function ADD($text_hoten, $text_username, $text_password, $text_gender, $text_email, $text_address, $text_phone)
    {
        $sql = "INSERT INTO taikhoan(fullname, username, password, gender, email, address, phonenumber) VALUES ('$text_hoten','$text_username','$text_password','$text_gender', '$text_email', '$text_address', '$text_phone')";
        return parent::Execute($sql);
    }

    // Kiểm tra email tồn tại
    public static function CheckEmail($email) {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        return parent::Getdata($sql);
    }

    // Cập nhật mật khẩu
    public static function ResetPassword($email, $new_password) {
        $sql = "UPDATE taikhoan SET password = '$new_password' WHERE email = '$email'";
        return parent::execute($sql);
    }
}
?>
