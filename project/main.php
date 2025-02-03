
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav ul {
            display:flex;
            justify-content:space-around;
            align-items:center; 
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href='users.php'>Users</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="comments.php">Comments</a></li>
        </ul>
    </nav>
</body>
</html>
