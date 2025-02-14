<?php
    $err=[];
    $user=[];
    //name validation
    if(isset($_POST['name'])){
        $user['name']= ucwords($_POST['name']);
    }else{
        $err['name']="Name is required";
    }
    //password validation
    if(isset($_POST['password'])){
        if(strlen($_POST['password'])<6){
            $err['password']="Password must be 6 characters long";
        }else{  
            $user['password']=password_hash($_POST['password']);
        }
    }
    //email validation
    if(isset($_POST['email'])){
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $err['email']="Email is not valid";
        }else{
            $user['email']=$_POST['email'];
        }
    }
    //phone validation
    if(isset($_POST['phone'])){
        if(strlen($_POST['phone'])<10){
            $err['phone']="Phone number is not valid";
        }else{
            $user['phone']=$_POST['phone'];
        }
    }
    //store data in json format
    if(file_exists('user.json')){
        $data=file_get_contents('user.json',true);
        $data=json_decode($data,true);
        if(empty($user)){
            $data=[$user];
        }else{
            //check if user already exists
            $existingUser=array_filter($data,function($data)use($user){
                return $data==$user;
            });
            if($existingUser){
                $err['user']="User already exists";
            }else{
                $data[]=$user;
            }
        }
    }
    file_put_contents('user.json',json_encode($data));
    header('location:login.php');
    die();
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
            <li><a href="signup.php">Register</a></li>
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
        <div class="error">
            <?php if (!empty($err)):?>
                <ul>
                    <?php foreach($err as $error):?>
                        <li><?php echo $error;?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif ; ?>
        </div>
    </div>
</body>
</html>