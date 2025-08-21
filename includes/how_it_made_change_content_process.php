<?php
    include_once 'config.php';
    session_start();
    $_SESSION['page'] = "how_it_made_change_content.php";
    $_SESSION['error1']="";
    $_SESSION['succes'] = "";
    if (isset($_GET['id'])) {
        header('Location: '.$config['site_url'].'content/pages/admin_panel.php?id='.$_GET['id']);
    }else{
        header('Location: '.$config['site_url'].'content/pages/admin_panel.php);
    }
?>