<?php
include ROOT.'\views\header\header.php';

?>

<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">DANH BẠ ĐIỆN TỬ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Phòng Ban</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="?controller=employee&action=index">Nhân Viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="<?= DOMAIN.'views/user/index.php'?>">Người Dùng</a>
                        </li>
                        

                    </ul>

                    <a href="<?= DOMAIN. 'views/login/index.php' ?>"
                        class="btn btn-primary">Đăng nhập</a>

                </div>
            </div>
        </nav>
    </header>
    

    <main>

    </main>
</body>