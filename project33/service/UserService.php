<?php
require_once root.'config/database.php';
class UserService{
    public function getAllUser(){
        $conn=connectDB();
        $sql="SELECT * from users";
        $result=mysqli_query($conn,$sql);
        $users=[];
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $users[]=$row;
            }
        }
        mysqli_close($conn);
        return $users;
    }
    public function getUserByName($username){
        $conn=connectDB();
        $sql="SELECT * from users where username = '$username'";
        $result=mysqli_query($conn,$sql);
        $users=[];
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $users[]=$row;
            }
        }
        mysqli_close($conn);
        return $users;
    }

    public function addUser($username, $password, $role, $employeeId){
        $conn=connectDB();
        try{
        $sql="INSERT INTO users VALUES('$username', '$password', '$role', '$employeeId')";
        mysqli_query($conn,$sql);
        return true;
        }catch(Exception $e){
            return false;
        }
        mysqli_close($conn);
        
    }
    public function updateUser($username, $password, $role, $employeeId){
        $conn=connectDB();
        try{
            $sql="UPDATE users SET password = '$password', role = '$role', employeeId = '$employeeId' WHERE username = '$username'";
            mysqli_query($conn,$sql);
            return true;
        }
        catch(Exception $e){
            return false;
        }
        mysqli_close($conn);
    }
}