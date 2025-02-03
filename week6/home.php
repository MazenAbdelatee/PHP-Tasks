<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li style="margin-right: auto;"><a href="home.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">LoginIN</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </nav>
    <h1>
        <?php session_start(); ?>
        <?php if(isset($_SESSION['name'])): ?>
            Welcome <?php echo $_SESSION['name']; ?>
        <?php else: ?>
            Welcome Guest
        <?php endif; ?>
    </h1>
</body>
</html>