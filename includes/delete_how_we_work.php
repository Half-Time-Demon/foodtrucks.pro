<?php

require_once "db.php";
session_start();
$_SESSION['error1']="";
$_SESSION['succes']=""; 
$_SESSION['page']="how_we_work_change_content.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Usunięcie użytkownika z bazy danych
    $query = "DELETE FROM how_we_work WHERE id = $id";
    if (mysqli_query($connection, $query)) {
        $_SESSION['succes']="how we work box with ID $id deleted";
    } else {
        $_SESSION['error1']="error: " . mysqli_error($connection);
    }
    header('Location: '.$config['site_url'].'content/pages/admin_panel.php');
}

?>