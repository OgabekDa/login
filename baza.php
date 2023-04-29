<?php
session_start();
$data = require_once('user.php');
$index = false;

foreach($data as $user){
    if( $_SESSION['name'] == $user['name'] and $_SESSION['password'] == $user['password']){
        $index = true;
    }
}

if($index=false){
    header("Location: index.php");
}

?>


<h1> WELCOME <?= $_SESSION['name'] ?></h1>
<a href="index.php">Ortga qaytish</a>