<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
   ];
?>

<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>
</form>