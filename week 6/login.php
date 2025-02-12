<?php
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $info=[
        "email" => $_POST["email"],
        "password"=> $_POST["password"]
    ];
    $data=file_get_contents("user.json");
    $data=json_decode($data,true);
    $user=array_filter($data,function($user) use($info){
        return ($user['email'] == $info['email']) && ($user['password'] == $info['password']);
    });
    if(isset($_POST["Login"])){
        if(!empty($_POST["email"])&& !empty($_POST["password"])){
                if (!empty($user)) {
                    $user = array_values($user)[0];
                    $_SESSION['name'] = $user['name'];
                    header("Location:home.php");
                    exit();
                } else {
                    echo "Invalid login credentials.";
                }
    }
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <nav>
        <ul>
            <li style="margin-right: auto;"><a href="home.php">Home</a></li>
            <li><a href="signup.php">SignUp</a></li>
            <li><a href="login.php">LoginIN</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </nav>
    <div class="contain">
        <form action="login.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="Login" value="Login">LogIn</button>
            </div>
        </form>
    </div>
</body>
</html>
