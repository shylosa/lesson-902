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

header('Location: thanks-subscription.html');