<?php
    class Chungchi extends controller{
        private $chungchi;
        function __construct(){
            $this->chungchi=$this->model('Quanlychungchi_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Chungchi_them_v'
            ]);
        }
        function themmoi(){
            if(isset($_POST['btnLuu'])){
                $maCC=$_POST['txtMaCC'];
                $tenCC=$_POST['txtTenCC'];
                $ngayCap=$_POST['txtNgayCap'];
                $loaiCC=$_POST['txtLoaiCC'];
                //Kiểm tra trùng mã chứng chỉ
                $kq=$this->chungchi->checktrungTenDN($maCC);
                $kq1=$this->chungchi->checktrungTenCC($tenCC);
                if($kq){
                    echo '<Script>alert("Mã chứng chỉ đã tồn tại!")</Script>';
                }else if($kq1){
                    echo '<Script>alert("Chứng chỉ đã tồn tại!")</Script>';
                }else{
                    $kq2=$this->chungchi->themmoi($maCC,$tenCC,$ngayCap,$loaiCC);
                    if($kq2){
                        echo'<script>alert("Thêm mới thành công!")</script>';
                    }
                    else{
                        echo '<Script>alert("Thêm mới thất bại!")</Script>';
                    }
                }
                $this->view('Masterlayout',[
                    'page'=>'Taikhoan_them_v',
                    'macc'=>$maCC,
                    'tencc'=>$tenCC,
                    'ngaycap'=>$ngayCap,
                    'loaicc'=>$loaiCC
                ]);
            }
        }
    }
?>