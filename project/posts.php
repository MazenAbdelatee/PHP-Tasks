<?php
    $post=curl_init();
    $cUrl="https://jsonplaceholder.org/posts";
    curl_setopt($post,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($post,CURLOPT_URL,$cUrl);
    $result=curl_exec($post);
    $data=json_decode($result,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
    <style>
        .posts-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .post {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color:rgb(57, 72, 135);
            transition: transform 0.2s;
        }
        .post:hover {
            transform: translateY(-10px);
        }
        .post h2 {
            font-size: 1.6em;
            margin-bottom: 15px;
            color: #333;
        }
        .post p {
            margin: 10px 0;
            color: #666;
        }
        .post img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="posts-container">
        <?php foreach ($data as $post) : ?>
            <div class="post">
                <h2><?= $post['title']; ?></h2>
                <p><?= $post['content']; ?></p>
                <img src="<?= $post['image']; ?>" alt="Post Image">
                <p>Status: <?= $post['status']; ?></p>
                <p>Category: <?= $post['category']; ?></p>
                <p>Published At: <?= $post['publishedAt']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>