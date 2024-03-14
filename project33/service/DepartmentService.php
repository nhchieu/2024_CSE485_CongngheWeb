<?php
require_once root . 'config/database.php';


class DepartmentService
{
    public function getAllDepartment()
    {
        $conn = connectDB();
        $sql = "SELECT * from departments";
        //b3:thực hiện câu sql
        $result = mysqli_query($conn, $sql);
        //b4:tạo mảng chứa kết quả
        $department = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $department[] = $row;
            }
        }
        //b5 đóng kết nối sql
        mysqli_close($conn);

        return $department;
    }
    public function getDepartmentById($id) {
        $conn = connectDB();
        $sql = "SELECT * from departments where DepartmenId = $id";
        //b3:thực hiện câu sql
        $result = mysqli_query($conn, $sql);
        //b4:tạo mảng chứa kết quả
        $department = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $department[] = $row;
            }
        }
        //b5 đóng kết nối sql
        mysqli_close($conn);
        return $department;
    }
    public function addDepartment($id,$name,$address,$email,$phone,$logo,$website,$DepartmentParentId) {
        $conn = connectDB();
        try{
        $sql = "INSERT INTO departments VALUES('$id','$name','$address','$email','$phone','$logo','$website','$DepartmentParentId')";
        //b3:thực hiện câu sql
        mysqli_query($conn, $sql);
        return true;
        }
        catch(Exception $e){
            return false;
        }
        mysqli_close($conn);
    }
    public function updateDepartment($id,$name,$address,$email,$phone,$logo,$website,$DepartmentParentId) {
        $conn = connectDB();
        $sql = "UPDATE departments SET (DepartmentName = '$name', Address = '$address', Email = '$email', Phone = '$phone', Logo = '$logo', Website = '$website', DepartmentParentId = '$DepartmentParentId' WHERE DepartmentId = $id)";
        //b3:thực hiện câu sql
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteDepartment($id) {
        $conn = connectDB();
        $sql = "DELETE FROM departments WHERE DepartmentId = $id";
        //b3:thực hiện câu sql
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

}