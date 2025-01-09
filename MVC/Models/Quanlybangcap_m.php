<?php
    class Quanlybangcap_m extends connectDB{
        function bangcap_update($maBang,$hinhthucDT,$ngayCap,$ngayKy,$xepLoai){
            $sql= "UPDATE bangtotnghiep
            SET hinhthucDT='$hinhthucDT', ngayCap='$ngayCap', ngayKy='$ngayKy' WHERE maBang='$maBang';
            UPDATE chitietbangtotnghiep
            SET xepLoai='$xepLoai' WHERE maBang='$maBang'";
            return mysqli_query($this->con,$sql);
        }
        function timkiem($maBang,$maSV){
            $sql= "SELECT btn.maBang, ctbtn.maSv, btn.hinhthucDT, btn.ngayCap, btn.ngayKy, ctbtn.xepLoai
            FROM bangtotnghiep as btn
            JOIN chitietbangtotnghiep as ctbtn
            ON btn.maBang = ctbtn.maBang
            WHERE btn.maBang LIKE '%$maBang%' AND ctbtn.maSV LIKE '%$maSV%'";
            return mysqli_query($this->con,$sql);
        }
        function checktrungMaBang($maBang){
            $sql= "SELECT * FROM bangtotnghiep WHERE maBang = '$maBang'";
            $dl = mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)> 0){
                $kq=true;
            }
            return $kq;
        }
        function checktrungMaSV($maSV){
            $sql= "SELECT * FROM chitietbangtotnghiep WHERE maSV = '$maSV'";
            $dl = mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)> 0){
                $kq=true;
            }
            return $kq;
        }
        function xettotnghiep($maBang,$maSV,$hinhthucDT,$ngayCap,$ngayKy,$xepLoai){
            $sql = "INSERT INTO bangtotnghiep VALUES('$maBang', '$hinhthucDT', ' $ngayCap','$ngayKy');
            INSERT INTO chitietbangtotnghiep VALUES('$maBang', '$maSV', ' $xepLoai','$ngayKy')";
            return mysqli_query($this->con,$sql);
        }
    } 
?>