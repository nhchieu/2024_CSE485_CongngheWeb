<?php
include "header.php";
include "navbar.php";
require_once ".\config\database.php";
$employee = getAllEmployee();
// echo '<pre>';
// echo print_r($employee);
//  echo '</pre>';
$i = 0;
$itemsPerPage = 5;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($employee) / $itemsPerPage);
$currentPageItems = array_slice($employee, ($currentPage - 1) * $itemsPerPage, $itemsPerPage) ?>


<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h3>Read Contact</h3>
                    <br>
                    <a href="employee_add.php" class="btn btn-primary">Create Contact</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="container-fluid mt-2">
                                <div class="row">
                                    <?php foreach ($currentPageItems as $employee): ?>


                                        <div class="col-md-3">

                                            <tr>
                                                <td>
                                                    <?= ++$i
                                                        ?>
                                                </td>
                                                <td>
                                                    <?= $employee['name'] ?>
                                                </td>
                                                <td>
                                                    <?= $employee['email'] ?>
                                                </td>
                                                <td>
                                                    <?= $employee['phone'] ?>
                                                </td>
                                                <td>
                                                    <?= $employee['title'] ?>
                                                </td>
                                                <td>
                                                    <?= $employee['created'] ?>
                                                </td>
                                                <td>

                                                    <a href="employee_edit.php?id=<?= $employee['id'] ?>"
                                                        class="btn btn-success"><i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="employee_del.php?id=<?= $employee['id'] ?>"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i>
</a>
                                                </td>


                                            </tr>

                                        </div>



                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </tbody>
                    </table>
                    <div class="ml-20 ">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php if ($currentPage > 1): ?>
                                    <li class="page-item"><a href="?page=<?= $currentPage - 1; ?>"
                                            class="page-link"><<</a></li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <?php if ($i == $currentPage): ?>
                                        <li class="page-item"><a class="page-link active" href="#">
                                                <?= $i ?>
                                            </a></li>
                                    <?php else: ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>">
                                                <?= $i ?>
                                            </a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($currentPage < $totalPages): ?>
                                    <li class="page-item"><a class="page-link"
                                            href="?page=<?= $currentPage + 1; ?>">>></a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>