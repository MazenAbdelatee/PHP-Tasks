<?php
require_once 'C:\xampp\htdocs\Tasks\week 8\handlers\form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group file-upload">
                <label for="photo" class="custom-file-label">Choose a Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*" hidden required>
                <span id="file-name"></span>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <script>
        document.getElementById('photo').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</body>
</html>
