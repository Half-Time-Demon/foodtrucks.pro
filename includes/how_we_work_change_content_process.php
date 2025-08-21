<?php
    include_once 'config.php';
    session_start();
    $_SESSION['page'] = "how_we_work_change_content.php";
    $_SESSION['error1']="";
    $_SESSION['succes'] = "";
    header('Location: '.$config['site_url'].'content/pages/admin_panel.php?id='.$_GET['id']);
?>