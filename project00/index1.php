<?php
sesssion_start(); // dich vu bao ve
if (!$_SESSION['isLogin']) {
    header("Location:login.php");
}
?>
<h1>Homepage of Dashboard</h1>
<a href="logout.php">Logout</a>