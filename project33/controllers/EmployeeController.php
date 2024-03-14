<?php
require_once root . '/services/EmployeeService.php';
require_once root . '/services/EmployeeService.php';

class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
        include root . '/views/admin/index.php';
    }

}
