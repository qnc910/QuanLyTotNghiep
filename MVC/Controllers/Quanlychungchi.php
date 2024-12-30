<?php
    class Quanlychungchi extends controller{
        private $qlcc;
        function __construct(){
            $this->qlcc=$this->model('Quanlychungchi_m');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Quanlychungchi_v'
            ]);
        }
    }
?>