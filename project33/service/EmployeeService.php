<?php
require_once root . 'config/database.php';
class EmployeeService
{
    public function getAllEmployees()
    {
        $conn = connectDB();
        $sql = "SELECT * from employees";
        $result = mysqli_query($conn, $sql);
        $employees = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $employees[] = $row;
            }
        }
        mysqli_close($conn);
        return $employees;
    }
    public function getEmployeeById($id)
    {
        $conn = connectDB();
        $sql = "SELECT * from employees where EmployeeId=$id";
        $result = mysqli_query($conn, $sql);
        $employees = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $employees[] = $row;
            }
        }
        mysqli_close($conn);
        return $employees;
    }
    public function addEmployee($id, $name, $email, $address, $phone, $position, $avatar, $departmentId)
    {
        $conn = connectDB();
        try {
            $sql = "INSERT INTO employees VALUES('$id','$name','$email','$address','$phone','$position','$avatar','$departmentId')";
            mysqli_query($conn, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }

        mysqli_close($conn);
    }
    public function updateEmployee($id, $name, $email, $address, $phone, $position, $avatar, $departmentId)
    {
        $conn = connectDB();
        try {
        $sql = "UPDATE employees SET Fullname='$name',Email='$email',Address='$address',Phone='$phone',Position='$position',Avatar='$avatar',DepartmentId='$departmentId' WHERE EmployeeId='$id'";
        mysqli_query($conn, $sql);
        return true;
        } catch (Exception $e) {
            return false;
        }
        mysqli_close($conn);
    }
    public function deleteEmployee($id)
    {
        $conn = connectDB();
        try {
        $sql = "DELETE FROM employees WHERE EmployeeId='$id'";
        mysqli_query($conn, $sql);
        return true;}
        catch (Exception $e) {
            return false;
        }
        mysqli_close($conn);
    }
}