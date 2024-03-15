<?php
require_once ROOT . '/services/EmployeeService.php';

class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
        include root . '/views/admin/index.php';
    }

}
