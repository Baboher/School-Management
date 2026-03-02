<?php
session_start();

$_SESSION = array(); // vide la session
session_destroy(); // détruit la session
header("Location: ../public/index.php"); // redirige vers l'accueil

?>