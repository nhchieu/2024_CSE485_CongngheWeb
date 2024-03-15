<?php
include 'header.php';
require_once ".\config\database.php";
$id=$_GET['id'];
$employee=getEmployeeById($id);



?>

<body>
    <h1 class="text-center">edit contact</h1>
    <div class="container">
        <form action="employee_edit_process.php?id=<?= $id ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="<?= $employee['name']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" value="<?= $employee['email']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone" value="<?= $employee['phone']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="<?= $employee['title']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">created</label>
                <input type="text" class="form-control" name="created" value="<?= $employee['created']?>">
            </div>
            <div class=""><button type="submit" class="btn btn-primary">edit contact</button></div>

        </form>
    </div>
</body>