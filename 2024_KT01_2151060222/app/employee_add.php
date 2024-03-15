<?php
include 'header.php';


?>

<body>
    <h1 class="text-center">add contact</h1>
    <div class="container">
        <form action="employee_add_process.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">created</label>
                <input type="text" class="form-control" name="created" id="created">
            </div>
            <div class=""><button type="submit" class="btn btn-primary">create contact</button></div>

        </form>
        <script>
        // Function to get the current time and format it as text
        function getCurrentTime() {
            let now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            let ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // Convert 0 to 12
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            let currentTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            return currentTime;
        }

        // Update the value of the input with the current time
        function updateCurrentTime() {
            let currentTimeText = getCurrentTime();
            document.getElementById('created').value = currentTimeText;
        }

        // Update the current time every second
        setInterval(updateCurrentTime, 1000);

        // Initial update
        updateCurrentTime();
    </script>
    </div>
</body>