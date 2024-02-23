<?php
$navItem = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐẠO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://fontawesome.com/icons" crossorigin="anonymous"></script>
</head>

<body>
    <div class="menubar">
        <nav>
            <ul>
                <li><i class="fa-solid fa-house"></i></li>
                <?php foreach ($navItem as $item): ?>
                    <li>
                        <?= $item ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>

    </div>


</body>

</html>