<?php
require_once 'users.php';
    session_start();

    if(!isset($_SESSION['user_id']) ||!isset($_COOKIE['logged_in']) || $_SESSION['user_role']!== 'admin'){
        header("location:login.php");
    }


    $username=$_GET['username'];

?>
<h2>edit user:<?=$user['name']?></h2>
