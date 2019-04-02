<?php
namespace serhii;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/classes/Worker2.php';

$worker = new Worker2();
$worker->setName('Иван');
$worker->setAge(25);
$worker->setSalary(1000);

$workerAnother = new Worker2();
$workerAnother->setName('Вася');
$workerAnother->setAge(26);
$workerAnother->setSalary(2000);

echo 'Сумма возрастов = ' . ($worker->getAge() + $workerAnother->getAge()) . '<br>';
echo 'Сумма зарплат = ' . ($worker->getSalary() + $workerAnother->getSalary()) . '<br>';

$workerAnother->setAge(150);
echo 'Пытаемся установить возраст 150 лет' . '<br>';
echo 'Возраст = ' .$workerAnother->getAge() . '<br>';

