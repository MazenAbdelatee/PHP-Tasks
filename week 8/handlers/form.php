<?php
if (!file_exists('uploads')){
    mkdir('uploads');
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['photo'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
    $userInfo=[
        "name"=>$_POST["name"],
        "email"=>$_POST["email"],
        "password"=>md5($_POST["password"]),
        "photo"=>$targetFile
    ];
    $data=json_encode($userInfo,JSON_PRETTY_PRINT,);
    $users=json_decode( file_get_contents('users.json'),true);
    $users = is_array($users) ? $users : [];
    $compare = array_filter($users, function($user) use ($userInfo) {
        return $user['email'] == $userInfo['email'];
    });
    if(empty($users)){
        $users=[$userInfo];
    }else{
        if($compare){
            echo "User already exists";
            die();
        }else{
            $users[]=$userInfo;
        }
    }
    file_put_contents('users.json',json_encode($users,JSON_PRETTY_PRINT));
    header('Location: login.php');
    die();  
}




?>