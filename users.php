<?php

session_start();

$fio = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

$_SESSION[] = [
    'name' => $fio,
    'login' => $login,
    'password' => $password
];
?>
<a href="index.php">Bosh sahifaga qaytish</a>

