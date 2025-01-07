<?php
    class Quanlytaikhoan extends controller{
        private $qltk;
        function __construct(){
            $this->qltk=$this->model('Quanlytaikhoan_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Quanlytaikhoan_v'
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $tentk=$_POST['txtTendangnhap'];
                $dl=$this->qltk->timkiem($tentk);
                //Gọi lại giao diện và truyền $dl ra
                $this->view('Masterlayout',[
                    'page'=>'Quanlytaikhoan_v',
                    'dulieu'=>$dl,
                    'tentk'=>$tentk
                ]);
            }
        }
        function xoa($tentk){
            $kq=$this->qltk->taikhoan_delete($tentk);
            if($kq){
                echo '<script>alert("Đã xóa thành công!")</script>';
            }else{
                echo '<script>alert("Xóa thất bại!")</script>';
            }
            $dl=$this->qltk->timkiem('');
            $this->view('Masterlayout',[
                'page'=>'Quanlytaikhoan_v',
                'dulieu'=>$dl
            ]);
        }
        function sua($tentk){
            $this->view('Masterlayout',[
                'page'=>'Taikhoan_sua_v',
                'dulieu'=>$this->qltk->timkiem($tentk)
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $tentk=$_POST['txtTendangnhap'];
                $matkhau=$_POST['txtMatkhau'];
                $vaitro=$_POST['txtVaitro'];
                $email=$_POST['txtEmail'];
                $sdt=$_POST['txtSodienthoai'];
                $diachi=$_POST['txtDiachi'];
                $kq=$this->qltk->taikhoan_update($tentk,$matkhau,$vaitro,$email,$sdt,$diachi);
                if($kq){
                    echo '<Script>alert("Sửa thành công!")</Script>';
                }else{
                    echo '<Script>alert("Sửa thất bại!")</Script>';
                }
                $this->view('Masterlayout',[
                    'page'=>'Quanlytaikhoan_v',
                    'dulieu'=>$this->qltk->timkiem('')
                ]);
            }
        }
    }
?>