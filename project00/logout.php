<?php
session_start();
if ($_SESSION['isLogin']) {
    unset($_SESSION['isLogin']); //huy phien, thu hoi the
    header('Location:login.php'); //chuyenhuong
}