<?php 

require_once 'Connect/connect.php';
class Sinhvien extends Database_ql_taikhoan
{
    public static function checkTrungMa($maSV)
    {
        $sql = "SELECT COUNT(*) AS count FROM sinhvien WHERE masv = '$maSV'";
        $result = parent::Getdata($sql);
        if ($result[0]['count'] > 0) {
            return true;
        } else {
            return false;
        }
    }



    public static function ADD($text_masv, $text_tensv, $text_ngaysinh, $text_malop,  $text_khoa)
    {
        $sql = "INSERT INTO sinhvien(masv, hoten, ngaysinh, lop, khoa) VALUES ('$text_masv', '$text_tensv', '$text_ngaysinh', '$text_malop', '$text_khoa')";
        return parent::Execute($sql);
    }

    public static function GetId($id)
    {
        $sql = "SELECT * FROM sinhvien WHERE sinhvien.masv = '$id'";
        return parent::Execute($sql);
    }

    public static function Edit($text_masv, $text_tensv, $text_ngaysinh, $text_malop, $text_khoa, $id)
    {
        $sql = "UPDATE sinhvien SET masv='$text_masv',hoten='$text_tensv',ngaysinh='$text_ngaysinh',lop='$text_malop',khoa='$text_khoa' WHERE masv='$id'";
        return parent::Execute($sql);
    }

    public static function Delete($text_masv)
    {
        $sql = "DELETE FROM sinhvien WHERE sinhvien.masv = '$text_masv'";
        return parent::Execute($sql);
    }

    public static function Search($txt_Tiemkiem)
    {
        $sql = "SELECT * FROM sinhvien WHERE sinhvien.hoten LIKE '%$txt_Tiemkiem%'";
        return parent::Getdata($sql);
    }

    public static function List()
    {
        $sql = "SELECT * FROM sinhvien";
        return parent::Getdata($sql);
    }
}
?>
