<?php
    class Taikhoan extends controller{
        private $taikhoan;
        function __construct(){
            $this->taikhoan=$this->model('Quanlytaikhoan_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Taikhoan_them_v'
            ]);
        }
        function themmoi(){
            if(isset($_POST['btnLuu'])){
                $tentk=$_POST['txtTendangnhap'];
                $matkhau=$_POST['txtMatkhau'];
                $vaitro=$_POST['txtVaitro'];
                $email=$_POST['txtEmail'];
                $sdt=$_POST['txtSodienthoai'];
                $diachi=$_POST['txtDiachi'];
                //Kiểm tra trùng tên đăng nhập
                $kq=$this->taikhoan->checktrungTenDN($tentk);
                if($kq){
                    echo '<Script>alert("Tên đăng nhập đã được sử dụng!")</Script>';
                }else{
                    $kq1=$this->taikhoan->themmoi($tentk,$matkhau,$vaitro,$email,$sdt,$diachi);
                    if($kq1){
                        echo'<script>alert("Thêm mới thành công!")</script>';
                    }
                    else{
                        echo '<Script>alert("Thêm mới thất bại!")</Script>';
                    }
                }
                $this->view('Masterlayout',[
                    'page'=>'Taikhoan_them_v',
                    'tentk'=>$tentk,
                    'matkhau'=>$matkhau,
                    'vaitro'=>$vaitro,
                    'email'=>$email,
                    'sdt'=>$sdt,
                    'diachi'=>$diachi
                ]);
            }
        }
    }
?>