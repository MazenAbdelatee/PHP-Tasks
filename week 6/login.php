<?php
    session_start();
    $userCredentials = [];
    $err=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(!empty($_POST['email'])){
            $userCredentials['email']=$_POST['email'];
        }else{
            $err['email']="Email is required";
        }
        if(!empty($_POST['password'])){
            $userCredentials['password']=md5($_POST['password']); ;
        }else{
            $err['password']="Password is required";
        }
        if(empty($err)){
            $data=[];
            if(file_exists('user.json')){
                $content=file_get_contents('user.json',true);
                $data=json_decode($content,true)??[];
            }
            if(!is_array($data)){
                $data=[];
            }
            $confirmUser=array_filter($data,function($data)use($userCredentials){
                return $data['email']==$userCredentials['email'] && 
                $data['password']==$userCredentials['password'];
            });
            if($confirmUser){
                $_SESSION['email']=$userCredentials['email'];
                header('Location:home.php');
                die();
            }else{
                $err['email']="Invalid email or password";
            }
        }
    }
// if(isset($_POST["email"]) && isset($_POST["password"])){
//     $info=[
//         "email" => $_POST["email"],
//         "password"=> $_POST["password"]
//     ];
//     $data=file_get_contents("user.json");
//     $data=json_decode($data,true);
//     $user=array_filter($data,function($user) use($info){
//         return ($user['email'] == $info['email']) && ($user['password'] == $info['password']);
//     });
//     if(isset($_POST["Login"])){
//         if(!empty($_POST["email"])&& !empty($_POST["password"])){
//                 if (!empty($user)) {
//                     $user = array_values($user)[0];
//                     $_SESSION['name'] = $user['name'];
//                     header("Location:home.php");
//                     exit();
//                 } else {
//                     echo "Invalid login credentials.";
//                 }
//     }
// }}
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
        <div class="error">
            <?php
                if(!empty($err)){
                    foreach($err as $error){
                        echo $error;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
