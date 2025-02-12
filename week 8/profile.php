<?php
$data=file_get_contents('users.json');
$data=json_decode($data,true);
if(isset($user)){
    $user=[
        "name"=>$data["name"],
        "email"=>$data["email"],
        "photo"=>$data["photo"]
    ];
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile-container">
        <img src="<?php  $user['photo']; ?>" alt="Profile Photo">
        <h1><? echo $user['name']?></h1>
        <p><? echo $user['email']?></p>
    </div>
</body>
</html>