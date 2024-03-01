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
    $user_role=$_SESSION['user_role'];

}
echo "welcome,".$user['name']."!";
echo "email: ".$user['email']."!";

if($authorization_levels[$user_role]['edit_profile_basic']){
    echo "<br>Edit basic profile information :<a href=edit_profile_basic.php>edit</a>";
}
if($user_role==="admin" && $authorization_levels[$user_role]["access_admin_panel"]){
    echo "<br><a href='admin_panel.php'>admin panel</a>'";
}
else{
    echo "user not found";
}
?>