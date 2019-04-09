<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();

if (isset($_REQUEST["submit"])){
    $_SESSION["state"] = $_REQUEST["state"];
    var_dump($_SESSION);
}

?>

<form action = "" method="GET">
    <p>Введите название своей страны</p>
    <label for = "state">Страна:</label>
    <input id = "state" name = "state">
    <input type = "submit" name = "submit">
</form>

<a href = "test-1-4.php">Перейти на страницу "test"</a>