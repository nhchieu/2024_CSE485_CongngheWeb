<!-- courses.php -->
<?php
include("header.php");
?>




<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '236 giờ'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ]
];
?>

<?php foreach ($courses as $course): ?>
    <div class="course">
        <div class="course-img">
            <img src="<?= $course['img']; ?>" alt="">
        </div>
        <div class="course-content">
            <h2>
                <?= $course['title']; ?>
            </h2>
            <p>
                <?= $course['description']; ?>
            </p>
            <h3>học phí:
                <?= $course['fee']; ?>
            </h3>
            <h3>khai giảng:
                <?= $course['start_date']; ?>
            </h3>
            <h3>thời lượng:
                <?= $course['duration']; ?>
            </h3>
        </div>
    </div>

<?php endforeach; ?>
</body>

</html>