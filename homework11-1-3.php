<?php
//Инициализируем сессию:
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}

echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';