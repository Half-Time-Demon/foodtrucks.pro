<?php

require_once "config.php";

session_start();

$old_Password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$confirm_Password = $_POST['confirm_password'];
$_SESSION['error1']="";
$_SESSION['succes']="";
$username = $_SESSION['username'];
$_SESSION['page']="change_password.php";

// Funkcja do szyfrowania hasła za pomocą SHA256
function encryptPassword($password){
    $encryptedPassword = hash('sha256', $password);
    return $encryptedPassword;
}



// Sprawdź, czy hasła są identyczne
if ($new_password !== $confirm_Password) {
    $_SESSION['error1']="Password and confirm password not the same:".$new_password." != ".$confirm_Password;
    header('Location: '.$config['site_url'].'content/pages/admin_panel.php');
    exit();
}

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

if (encryptPassword($old_Password) === $row['password']) {
    
    $encryptedNewPassword = encryptPassword($new_password);

    $updateQuery = "UPDATE users SET password = '$encryptedNewPassword' WHERE username = '$username'";
    $connection->query($updateQuery);

    $_SESSION['succes']="Password sucsesfuly changed";

} else {
    $_SESSION['error1']="Old password is incorect";
}

header('Location: '.$config['site_url'].'content/pages/admin_panel.php');
exit();
?>