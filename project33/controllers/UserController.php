<?php

require_once root . '/app/services/UserService.php';
require_once root . '/app/services/EmployeeService.php';
class UserController
{

  public function profile()
  {
    session_start();

    $id = $_GET['id'];
    
    // $user = new UserService();
    // $user->getUserById($id);
    echo $id;
    
    
    $employees = new EmployeeService();
    $employee = $employees ->getAllUser($id);



    include root . '/app/views/users/index.php';
  }
}