<?php
$users=curl_init();
$Curl="https://jsonplaceholder.org/users";
curl_setopt($users,CURLOPT_RETURNTRANSFER,true);
curl_setopt($users,CURLOPT_URL,$Curl);
$result=curl_exec($users);
$data=json_decode($result,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Birth Date</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $users): ?>
                <tr>
                    <td><?= $users['firstname'] . ' ' . $users['lastname'] ?></td>
                    <td><?= $users['birthDate'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['address']['city'] . ', ' . $users['address']['street'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>