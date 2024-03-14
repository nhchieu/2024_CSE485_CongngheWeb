<?php
require_once ROOT. '/services/DepartmentService.php';
class DepartmentController
{
  public function index()
  {
    session_start();

    $departmentService = new DepartmentService();
    $departments = $departmentService->getAllDepartment();

    include ROOT.'/views/home/index.php';

  }
}