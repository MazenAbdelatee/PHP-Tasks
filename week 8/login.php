<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    $confirm=[
        "email"=>$_POST['email'],
        "password"=>md5($_POST['password']) 
    ];
    $data=json_decode(file_get_contents('users.json'),true);
    array_filter($data,function($user)use($confirm){
        ($user['email']==$confirm['email'] && $user['password']==$confirm['password'])?header('location:profile.php'):header('location:login.php');
    });
    $confirm['photo']=$data['photo'];
    header('location:profile.php');
    die();
}

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
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" style='width:95%' required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" style='width:95%' required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>