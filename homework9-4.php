<?php
namespace serhii;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Worker4.php';
require_once __DIR__ . '/classes/Student.php';
require_once __DIR__ . '/classes/Driver.php';

$worker = new Worker4('Иван', 25, 1000);
$workerAnother = new Worker4('Вася', 26, 2000);

echo 'Сумма возрастов = ' . ($worker->getAge() + $workerAnother->getAge()) . '<br>';
echo 'Сумма зарплат = ' . ($worker->getSalary() + $workerAnother->getSalary()) . '<br>';

$student = new Student('Сергей', 20, 800, 2);

echo $student->getName(). '<br>';
echo $student->getAge(). '<br>';
echo $student->getStipend(). '<br>';
echo $student->getCourse(). '<br>';


$driver = new Driver('Анатолий', 50, 800, 12, 'C');

echo $driver->getName(). '<br>';
echo $driver->getAge(). '<br>';
echo $driver->getExperience(). '<br>';
echo $driver->getCategory(). '<br>';