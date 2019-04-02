<?php
namespace serhii;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/classes/Worker.php';

$worker = new Worker();
$worker->name = 'Иван';
$worker->age = 25;
$worker->salary = 1000;

$workerAnother = new Worker;
$workerAnother->name = 'Вася';
$workerAnother->age = 26;
$workerAnother->salary = 2000;

echo 'Сумма возрастов = ' . ($worker->age + $workerAnother->age) . '<br>';
echo 'Сумма зарплат = ' . ($worker->salary + $workerAnother->salary);
