<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost';
$user = 'serhii';
$password = 'password';
$db_name = 'serhiidb';

$table = 'workers';

$link = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "SET NAMES 'utf8'");

//Задача 1
//$res = [];
//$query = "SELECT * FROM $table WHERE id = 3";
//
//$res[1] = userQuery($link, $query);
//
//function userQuery($linkDB, $uQuery){
//    $queryResult = mysqli_query($linkDB, $uQuery) or die(mysqli_error($linkDB));
//    return $queryResult;
//}
//
//function convertResult($resultDB){
//    for ($data = []; $row = mysqli_fetch_assoc($resultDB); $data[] = $row);
//    return $data;
//}
//echo 'Задача 1';
//var_dump(convertResult($res[1]));
//
////Задача 2
//$query = "SELECT * FROM $table WHERE salary = 1000";
//$res[2] = userQuery($link, $query);
//
//echo 'Задача 2';
//var_dump(convertResult($res[2]));
//
//echo 'Задача 3';

//--------------------------------------

//$query = "SELECT * FROM $table WHERE id = 3";
//$res = mysqli_query($link, $query) or die(mysqli_error($link));
//
//for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
//var_dump($data);



$query = "SELECT * FROM $table WHERE salary = 1000";
//$link = mysqli_connect($host, $user, $password, $db_name);
$res = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
var_dump($data);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

