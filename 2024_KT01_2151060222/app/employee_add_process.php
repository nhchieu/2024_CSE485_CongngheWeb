<?php
require_once '.\config\config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $title=$_POST['title'];
    $created=$_POST['created'];
}

$conn=connectDB();
$sql = "INSERT INTO employee(name,email,phone,title,created) VALUES('$name','$email','$phone','$title','$created')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('thêm thành công');</script>";
echo "<script>window.location.href='index.php';</script>";
}

mysqli_close($conn);

