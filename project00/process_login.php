<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == 'haianh' && $pass == '123') {
        session_start();
        $_SESSION['isLogin'] == $user;
        header('Location:admin/index1.php');
    }
}