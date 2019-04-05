<?php

spl_autoload_register(function ($name) {
    require __DIR__ . '/classes/' . $name . '.php';
});


$data = [3, 18, 11, 4, 7];

print_r('Сумма квадратов массива = ' . ArraySumHelper::getSum2($data) . '<br>');

$rect = new Rectangle(10, 15);
print_r('getSquarePerimeterSum(' .
    $rect->getA() . ", "  . $rect->getB() . ") = " . $rect->getSquarePerimeterSum());