<?php

    //connect config

    include_once "../../includes/config.php";

    //connect html structure and header

    require_once "../struct.php";

    require_once "../header.php";

    //session_start();
    
?>

<main id="panel" class="panel admin-panel-main ">
    <div>  
        <?php include ("../navigation.php"); // navigation.php generates the menu ?>
    </div>
    <div id="content" class="<?php echo $_SESSION['page'];?>">
        <?php
            if($_SESSION['page']!==''){
                include $_SESSION['page'];
            }else{
                include 'change_password.php';
            }

        ?>
    </div>


</main>