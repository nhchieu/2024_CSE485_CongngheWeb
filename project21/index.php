<?php
require_once 'funtion.php';
$categories = getAllCategories();
$news = getAllNews();
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($news) / $itemsPerPage);
$currentPageItems = array_slice($news, ($currentPage - 1) * $itemsPerPage, $itemsPerPage) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand text-primary">Vietnamnet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="#navbarSipportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSuportedContent">
                    <ul class="navbar-nav me-auto mb2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Trang chủ</a>
                        </li>

                        <?php
                        foreach ($categories as $cate):
                            ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <?= $cate['category_name'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <footer>

    </footer>
    <div class="container-fluid mt-2">
        <div class="row">
            <?php foreach ($currentPageItems as $news): ?>


                <div class="col-md-3">
                    <div class="card">
                        <img src="<?= $news['feature_image_url'] ?>" alt="..." class="card-imt-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $news['title'] ?>
                            </h5>
                            <a href="#" class="btn btn-primary">xem thêm</a>
                        </div>
                    </div>
                </div>



            <?php endforeach; ?>
        </div>
    </div>
    <div class="ml-20">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?= $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 0; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span>
                    <?= $i ?>
                </span>
            <?php else: ?>
                <a href="?page=<?= $i ?>">
                    <?= $i ?>
                </a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?= $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>