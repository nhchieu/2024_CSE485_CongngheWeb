<?php
include 'header.php';
?>
<body>
    <form action="process_login.php" method="post">
        Username:<input type="text" name="username" required>
        <br>
        password:<input type="password" name="password"required>
        <br>
        <button type="submit">login</button>
    </form>
</body>
</html>