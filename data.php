<?php
session_start();

$fio = $_POST['name'];
$paasword = $_POST['password'];









foreach($data as $user){
    if($user['name']==$fio and $user['password']==$paasword){
        $_SESSION['name'] = $user['name'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['password'] = $user['password'];
        header('Location: baza.php');
    }
}


?>
<center>
    <p>Eror! Siz ro'yhatdan o'tmagansiz</p>
<a href="index.php">Ortga qaytish</a>
</center>
