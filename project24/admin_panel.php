<?php
require_once 'users.php';
include 'header.php';
    session_start();
    if(!isset($_SESSION['user_id']) ||!isset($_COOKIE['logged_in']) || $_SESSION['user_role']!== 'admin'){
        header("location:login.php");
    }
?>
<h2>Users</h2>
<table>
    <tr>
        <th>username</th>
        <th>name</th>
        <th>email</th>
        <th>role</th>
        <th>actions</th>
    </tr>
    <?php foreach($users as $u):?>
        <tr>
            <td><?=$u['username'];?></td>
            <td><?=$u['name'];?></td>
            <td><?=$u['email'];?></td>
            <td><?=$u['role'];?></td>
            <td>
                <?php
                    if($u['username']!==$_SESSION['user_id']){
                        echo "<a href='edit_user.php?username=".$u['username']."'>edit</a>";
                    }
                ?>
            </td>
    
        </tr> 
    <?php endforeach;?>
    
</table>

<form action="logout.php">
    <button type="submit" class="btn bg-primary">logout</button>
</form>

