
<?php
    include("header.php");
?>
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