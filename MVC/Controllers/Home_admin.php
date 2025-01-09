<?php
    class Home_admin extends controller{
        function Get_data(){
            $this->view('Masterlayout_admin',[
                'page'=>'Home_admin_v'
            ]);
        }
    }
?>