<?php

// $_GET - Данные GET-запроса
// $_POST - Данные POST-запроса

$errors = [];

if (empty($_POST['email'])) {
	$errors['email'] = 'Введите email';
} else {
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

	if ($email === false) {
		$errors['email'] = 'Неверный email';
	}
}

if (empty($_POST['password'])) {
	$errors['password'] = 'Введите пароль';
}

if (empty($_POST['passwordConfirmation'])) {
	$errors['passwordConfirmation'] = 'Введите подтверждение пароля';
} elseif ($_POST['password'] != $_POST['passwordConfirmation']) {
	$errors['passwordConfirmation'] = 'Пароль и подтверждение не совпадают';
}

if ($errors) {
	include 'index.php';
	exit();
}

$file = fopen('users.txt', 'a');
$line = $_POST['email'] . "\t" . $_POST['password'] . "\n";
fputs($file, $line);
fclose($file);

header('Location: thanks.html');
