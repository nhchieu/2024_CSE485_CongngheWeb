<?php
require_once 'config.php';
function getAllEmployee() {

        
    $conn=connectDB();

    $sql="SELECT * from employee";

    $result=mysqli_query($conn,$sql);

    $employee=[];
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $employee[]=$row;
        }
    }

    mysqli_close($conn);

    return $employee;
}

function getEmployeeById($id) {

        
    $conn=connectDB();

    $sql="SELECT * FROM employee where id = $id";

    $result=mysqli_query($conn,$sql);

   
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $employee=$row;
        }
    }

    mysqli_close($conn);

    return $employee;
}