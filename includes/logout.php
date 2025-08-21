<?php
// Inicjalizuj sesję
session_start();

// Zniszcz sesję
session_destroy();

include_once 'config.php';

// Przekieruj do strony logowania
header('Location:'.$config["site_url"].'index.php');
exit();
?> 