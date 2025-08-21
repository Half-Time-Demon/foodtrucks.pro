<?php

require_once "db.php";
session_start();
$_SESSION['error1']="";
$_SESSION['succes']=""; 
$_SESSION['page']="registration_user.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Usunięcie użytkownika z bazy danych
    $query = "DELETE FROM users WHERE id = $id";
    if (mysqli_query($connection, $query)) {
        $_SESSION['succes']="User with ID $id deleted";
    } else {
        $_SESSION['error1']="error: " . mysqli_error($connection);
    }
    header('Location: '.$config['site_url'].'content/pages/admin_panel.php');
}

?>