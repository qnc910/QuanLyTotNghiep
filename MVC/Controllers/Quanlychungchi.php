<?php
    class Quanlychungchi extends controller{
        private $qlcc;
        function __construct(){
            $this->qlcc=$this->model('Quanlychungchi_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Quanlychungchi_v',
                'dulieu'=>$this->qlcc->timkiem('','')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maCC=$_POST['txtMaCC'];
                $tenCC=$_POST['txtTenCC'];
                $dl=$this->qlcc->timkiem($maCC,$tenCC);
                //Gọi lại giao diện và truyền $dl ra
                $this->view('Masterlayout',[
                    'page'=>'Quanlychungchi_v',
                    'dulieu'=>$dl,
                    'macc'=>$maCC,
                    'tencc'=>$tenCC
                ]);
            }
        }
        function xoa($maCC){
            $kq=$this->qlcc->chungchi_delete($maCC);
            if($kq){
                echo '<script>alert("Đã xóa thành công!")</script>';
            }else{
                echo '<script>alert("Xóa thất bại!")</script>';
            }
            $dl=$this->qlcc->timkiem('','');
            //Gọi lại giao diện và truyền $dl ra
            $this->view('Masterlayout',[
                'page'=>'Quanlychungchi_v',
                'dulieu'=>$dl
            ]);
        }
        function sua($maCC){
            $this->view('Masterlayout',[
                'page'=>'Chungchi_sua_v',
                'dulieu'=>$this->qlcc->timkiem($maCC,'')
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maCC=$_POST['txtMaCC'];
                $tenCC=$_POST['txtTenCC'];
                $tenCC=$_POST['txtTenCC'];
                $ngayCap=$_POST['txtNgayCap'];
                $loaiCC=$_POST['txtLoaiCC'];
                $kq=$this->qlcc->chungchi_update($maCC,$tenCC,$ngayCap,$loaiCC);
                if($kq){
                    echo '<Script>alert("Sửa thành công!")</Script>';
                }else{
                    echo '<Script>alert("Sửa thất bại!")</Script>';
                }
                $this->view('Masterlayout',[
                    'page'=>'Quanlychungchi_v',
                    'dulieu'=>$this->qlcc->timkiem('','')
                ]);
            }
        }
    }
?>