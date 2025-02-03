<?php
    $comments=curl_init();
    $cUrl="https://jsonplaceholder.org/comments";
    curl_setopt($comments,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($comments,CURLOPT_URL,$cUrl);
    $result=curl_exec($comments);
    $data=json_decode($result,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color:rgb(35, 75, 39);
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #00796b;
            border-radius: 5px;
            color:rgb(3, 7, 6);
        }
        li strong {
            color:rgb(39, 51, 181);
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($data as $comments) : ?>
            <li>
                <strong>ID:</strong> <?=$comments['id'] ?><br>
                <strong>Comment:</strong> <?=$comments['comment']; ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>