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
    }
?>