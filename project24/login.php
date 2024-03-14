<?php
include 'header.php';
?>

<body>
    <div class="container mt-5 pl-5">
        <div class="col-1">
            <form action="process_login.php" method="post">
                Username:<input type="text" name="username" required>
                <br>
                password:<input type="password" name="password" required>
                <br>
                <button type="submit" class="btn bg-primary ml-5">login</button>
            </form>
        </div>
    </div>
</body>

</html>