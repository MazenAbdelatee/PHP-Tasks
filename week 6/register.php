<?php
    $err=[];
    $user=[];
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(!empty($_POST['name'])){
            $user['name']= ucwords($_POST['name']);
        }else{
            $err['name']="Name is required";
        }
        
        
        if(!empty($_POST['password'])){
            if(strlen($_POST['password'])<6){
                $err['password']="Password must be 6 characters long";
            }else{  
                $user['password']=md5($_POST['password']);
            }
        }
        
        if(!empty($_POST['email'])){
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $err['email']="Email is not valid";
            }else{
                $user['email']=$_POST['email'];
            }
        }
        
        if(!empty($_POST['phone'])){
            if(strlen($_POST['phone'])<10){
                $err['phone']="Phone number is not valid";
            }else{
                $user['phone']=$_POST['phone'];
            }
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
            $existUser=array_filter($data,function($val) use($user){
                return $val['email']==$user['email'];
            });
            if($existUser){
                $err['email']="Email already exist";
            }else{
                $data[]=$user;
                file_put_contents('user.json',json_encode($data,JSON_PRETTY_PRINT));  
                header('Location:login.php');
                die();
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
            <div class="error">
                <?php if (!empty($err)):?>
                    <ul>
                        <?php foreach($err as $error):?>
                            <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif ; ?>
            </div>
        </form>
    </div>
</body>
</html>