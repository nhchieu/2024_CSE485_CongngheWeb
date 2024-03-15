<?php
require_once '.\config\config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $title=$_POST['title'];
    $created=$_POST['created'];
}
$id=$_GET['id'];

$conn=connectDB();

    $sql = "UPDATE employee SET name='$name',email='$email',phone='$phone',title='$title',created='$created' where id='$id'"; 
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('sửa thành công');</script>";
    echo "<script>window.location.href='index.php';</script>";
    }

mysqli_close($conn);

