<?php
    if(isset($_POST["name"])!=null && isset($_POST["password"])!=null && isset($_POST["email"])!=null && isset($_POST["phone"])!=null){
        $data=[
            "name" => $_POST["name"],
            "password"=> $_POST["password"],
            "email"=>$_POST['email'],
            "phone"=>$_POST['phone']
        ];
        $data=json_encode($data,JSON_PRETTY_PRINT);
        if(file_exists("user.json")){
            $users=[file_get_contents("user.json")];
            if(empty($users)){
                file_put_contents("user.json",$data);
                header("Location:login.php");
                die();
            }else{
                $users = json_decode(file_get_contents("user.json"), true);
                array_push($users, json_decode($data, true));
                $users = json_encode($users, JSON_PRETTY_PRINT);
                file_put_contents("user.json", $users);
                header("Location:login.php");
                exit();
            }
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="register.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <button type="submit" >Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>