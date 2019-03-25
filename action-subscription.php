<?php

$errors = [];

if (empty($_POST['email'])) {
    $errors['email'] = 'Введите email';
} else {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email === false) {
        $errors['email'] = 'Неверный email';
    }
}

if ($errors) {
    include 'subscription.php';
    exit();
}

$file = fopen('subscribers.txt','a');
$line = $_POST['email'] . "\n";
fputs($file, $line);
fclose($file);

header('Location: thanks-subscription.html');