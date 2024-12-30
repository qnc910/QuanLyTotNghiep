<?php
    class Quanlytaikhoan extends controller{
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Quanlytaikhoan'
            ]);
        }
    }
?>