<?php   
    $navItem=[
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
    <nav><ul>
    <?php
    foreach($navItem as $item){
        echo '<li>$item</li>';
    }
    ?>
    </ul></nav>
