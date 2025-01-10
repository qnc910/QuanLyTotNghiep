<?php
    class Quanlychungchi_m extends connectDB{
        function themmoi($maCC,$tenCC,$ngayCap,$loaiCC){
            $sql = "INSERT INTO chungchi VALUES('$maCC', '$tenCC', ' $ngayCap','$loaiCC')";
            return mysqli_query($this->con,$sql);
        }
        function checktrungMaCC($maCC){
            $sql= "SELECT * FROM chungchi WHERE maCC = '$maCC'";
            $dl = mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)> 0){
                $kq=true;
            }
            return $kq;
        }
        function checktrungTenCC($tenCC){
            $sql= "SELECT * FROM chungchi WHERE tenCC = '$tenCC'";
            $dl = mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)> 0){
                $kq=true;
            }
            return $kq;
        }
        function timkiem($maCC,$maSV): bool|mysqli_result{
            $sql= "SELECT cc.maCC, cc.tenCC, ctcc.maSV as 'maSV', cc.ngayCap, cc.loaiCC
            FROM chungchi as cc 
            JOIN chitietchungchi as ctcc
            ON cc.maCC = ctcc.maCC
            WHERE cc.maCC LIKE '%$maCC%' AND ctcc.maSV LIKE '%$maSV%';";
            return mysqli_query($this->con,$sql);
        }
        function chungchi_delete($maCC){
            $sql= "DELETE FROM chungchi WHERE maCC ='$maCC'";
            return mysqli_query($this->con,$sql);
        }
        function chungchi_update($maCC,$tenCC,$ngayCap,$loaiCC){
            $sql= "UPDATE chungchi SET tenCC='$tenCC', ngayCap='$ngayCap', loaiCC='$loaiCC' WHERE maCC='$maCC'";
            return mysqli_query($this->con,$sql);
        }
    } 
?>