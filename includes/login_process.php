<?php

require_once "db.php";

session_start();

// Pobierz dane logowania z formularza
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['error']="";

function encryptPassword($password){
    $encryptedPassword = hash('sha256', $password);
    return $encryptedPassword;
}
$encryptedPassword = encryptPassword($password);

// Wykonaj zapytanie do bazy danych w celu weryfikacji danych logowania
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$encryptedPassword'";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    $user_role = $row['role'];
    // Jeśli dane są poprawne, przekieruj do strony powitalnej lub zaloguj użytkownika w sesji
    $_SESSION['id'] = $user_id;
    $_SESSION['user_role'] = $user_role;
    $_SESSION['username'] = $username;
    header('Location:'.$config["site_url"].'index.php');
} else {
    // Jeśli dane są niepoprawne, wyświetl komunikat o błędzie
    $_SESSION['error']="log-err";
    header('Location:'.$config["site_url"].'content/pages/login.php');
}
//session_write_close();
?>