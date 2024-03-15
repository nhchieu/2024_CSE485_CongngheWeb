<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'contact');

function connectDB(){
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$conn) {
        die("Kết nối csdl thất bại: ". mysqli_connect_error());
    }
    return $conn;
}