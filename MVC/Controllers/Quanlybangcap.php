<?php
    class Quanlybangcap extends controller{
        private $qlbc;
        function __construct(){
            $this->qlbc=$this->model('Quanlybangcap_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Quanlybangcap_v'
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maBang=$_POST['txtMaCC'];
                $maSv=$_POST['txtTenCC'];
                $dl=$this->qlbc->timkiem($maBang,$maSv);
                //Gọi lại giao diện và truyền $dl ra
                $this->view('Masterlayout',[
                    'page'=>'Quanlybangcap_v',
                    'dulieu'=>$dl,
                    'mabang'=>$maBang,
                    'masv'=>$maSv
                ]);
            }
        }
        function sua($maBang){
            $this->view('Masterlayout',[
                'page'=>'Bangcap_sua_v',
                'dulieu'=>$this->qlbc->timkiem($maBang,'')
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maBang=$_POST['txtMaBang'];
                $hinhthucDT=$_POST['txtHinhThucDT'];
                $ngayCap=$_POST['txtNgayCap'];
                $ngayKy=$_POST['txtNgayKy'];
                $xepLoai=$_POST['txtXepLoai'];
                $kq=$this->qlbc->bangcap_update($maBang,$hinhthucDT,$ngayCap,$ngayKy,$xepLoai);
                if($kq){
                    echo '<Script>alert("Sửa thành công!")</Script>';
                }else{
                    echo '<Script>alert("Sửa thất bại!")</Script>';
                }
                $this->view('Masterlayout',[
                    'page'=>'Quanlybangcap_v',
                    'dulieu'=>$this->qlbc->timkiem('','')
                ]);
            }
        }
    }
?>