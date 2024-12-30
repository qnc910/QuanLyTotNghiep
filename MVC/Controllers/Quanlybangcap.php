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
    }
?>