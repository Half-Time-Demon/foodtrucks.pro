<?php
    function set_captcha(){
        $numb1 = rand(1,100);
        $numb2 = rand(1,100);
        $_SESSION['capcha'] = $numb1 + $numb2;
        return "{$numb1} + {$numb2} =?"; 
    }

    function check_captcha($res){
        return $_SESSION['capcha'] == $res;
    }

?>