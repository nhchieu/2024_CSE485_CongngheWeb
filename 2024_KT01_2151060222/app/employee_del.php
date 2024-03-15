<?php
require_once '.\config\config.php';
$id=$_GET['id'];

$conn=connectDB();
$sql = "DELETE FROM employee WHERE id='$id'";

$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('Xóa thành công contact $id');</script>";
    echo "<script>window.location.href='index.php';</script>";
}

mysqli_close($conn);
