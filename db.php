<?php

$db = new PDO('mysql:host=localhost; dbname=test', 'root', 'root', [
    PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"
]);

$email = 'huba@i.ua';

$sql = 'SELECT id, first_name, last_name, email
        FROM users
        WHERE email = "'.huba@i.ua.'"
        ORDER BY last_name';
var_dump($sql);
$result = $db->query($sql);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?=$row['id'] ?></td>
            <td><?=$row['first_name'] ?></td>
            <td><?=$row['last_name'] ?></td>
            <td><?=$row['email'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
