<?php

require_once 'Connect/connect.php';

class Dangnhap extends Database_ql_taikhoan
{
    public static function Login($text_username, $text_password)
    {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan.tentk = '$text_username' AND taikhoan.matkhau = '$text_password'";
        return parent::Getdata($sql);
    }

    public static function ADD($text_username, $text_password, $text_email, $text_address, $text_phone, $text_role)
    {
        $sql = "INSERT INTO taikhoan(tentk, matkhau, vaitro, email, sdt, diachi) VALUES ('$text_username','$text_password', '$text_role', '$text_email', '$text_phone', '$text_address' )";
        return parent::Execute($sql);
    }

    // Kiểm tra email tồn tại
    public static function CheckEmail($email) {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        return parent::Getdata($sql);
    }

    // Cập nhật mật khẩu
    public static function ResetPassword($email, $new_password) {
        $sql = "UPDATE taikhoan SET matkhau = '$new_password' WHERE email = '$email'";
        return parent::execute($sql);
    }
    public static function Role($text_username, $text_password)
{
    $sql = "SELECT * FROM taikhoan WHERE tentk = '$text_username' AND matkhau = '$text_password'";
    return parent::Getdata($sql); // Trả về thông tin tài khoản bao gồm chucvu
}
public static function List_id($username) {
    $sql ="SELECT * FROM taikhoan WHERE tentk = '$username' ";
    return parent::Getdata($sql);
}

public static function Edit($password, $email, $phone, $address,$fullname) {
$sql= "UPDATE taikhoan SET matkhau = '$password', email = '$email' , sdt= '$phone', diachi = '$address' WHERE tentk = '$fullname' ";
    return parent::execute($sql);
}

public static function Delete($text_username) {
    $sql = "DELETE FROM taikhoan WHERE tentk  = '$text_username'";
    return parent::execute($sql);
}
}
?>