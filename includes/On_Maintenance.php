<?php
    //get client ip addr
    function getUserAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        } 
        return $ip;
    }

    //on maintenence
    if($config['On_Maintenance']==true and !in_array(getUserAddr(),$config['allow_ip'])){
        require_once("content/Maintenance_page/Maintenance.php");
        exit(); 
    }
?> 
