<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();

if (!empty($_SESSION['state'])){
    echo "Ваша страна: " . $_SESSION['state'];
}


