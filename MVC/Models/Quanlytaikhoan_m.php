<?php
    class Quanlytaikhoan_m extends connectDB{
        function themmoi($tentk,$matkhau,$vaitro,$email,$sdt,$diachi){
            $sql = "INSERT INTO taikhoan VALUES('$tentk', '$matkhau', ' $vaitro','$email','$sdt','$diachi')";
            return mysqli_query($this->con,$sql);
        }
        function checktrungTenDN($tentk){
            $sql= "SELECT * FROM taikhoan WHERE tenTK = '$tentk'";
            $dl = mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)> 0){
                $kq=true;
            }
            return $kq;
        }
        function timkiem($tentk): bool|mysqli_result{
            $sql= "SELECT * FROM taikhoan WHERE tenTK LIKE '%$tentk%'";
            return mysqli_query($this->con,$sql);
        }
        function taikhoan_delete($tentk){
            $sql= "DELETE FROM taikhoan WHERE tenTK ='$tentk'";
            return mysqli_query($this->con,$sql);
        }
        function taikhoan_update($tentk,$matkhau,$vaitro,$email,$sdt,$diachi){
            $sql= "UPDATE taikhoan SET matKhau='$matkhau', vaiTro='$vaitro', email='$email', sdt='$sdt', diaChi='$diachi' WHERE tenTK='$tentk'";
            return mysqli_query($this->con,$sql);
        }
    } 
?>