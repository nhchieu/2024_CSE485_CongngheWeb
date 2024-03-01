<?php
    require_once 'users.php';
    session_start();

    if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
        header('location:login.php');

    }

    $username=$_SESSION['user_id'];

    $user=null;
    foreach($users as $u){
        if($u['username']===$username){
            $user=$u;
            break;
        }
    }

    if($user){
        echo "welcome,".$user['name']."!";
        echo "<br>gmail:".$user['email']."!";
        
    }
    else{
        echo "user not found";
    }
    echo "<form action='logout.php'>";
    echo "<button type='submit'>logout</button>";
    echo "</form>";
?>