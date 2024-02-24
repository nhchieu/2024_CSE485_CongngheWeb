<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //lay ra du lieu tu form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //kiem tra csdl (chua hoc)
    if ($user == 'haianh' && $pass == '123') { //thu cccd
        session_start();
        $_SESSION['isLogin'] = $user; //cap the
        header('Location:project00/index1.php'); //chuyen huong mac dinh
    }
}