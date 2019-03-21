<?php

//Задача 1
$array = [1, 2, 3, 4, 5];
$result = 0;
foreach ($array as $item) {
    $result += $item * $item;
}

echo 'Сумма квадратов элементов = ' . $result . '<br>' . '<br>';

//Задача 2
$arr = [
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'
];

foreach ($arr as $key => $i){
    echo "$key - зарплата $i долларов<br>";
}

echo '<br>';

//Задача 3
$dayOfWeek = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];

$day = $dayOfWeek[ date ("w") - 1 ];

foreach ($dayOfWeek as $i){
    echo setText ($i, $day) . '<br>';
}

function setText($text, $currentDay){
    if ($text != $currentDay) {
        return $text;
    } else {
        return '<em>' . $text . '</em>';
    }
}

echo '<br>';

//Задача 4

$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];
$en = [];
$ru = [];
$i = 0;

foreach ($arr as $key => $item){
    $en[$i] = $key;
    $ru[$i] = $item;
    $i++;
}
for ($j = 0; $j < $i ; $j++){
    echo ( $en[$j] . ' ' );
}

echo ('<br>');

for ($j = 0; $j < $i ; $j++){
    echo ( $ru[$j] . ' ' );
}

echo ('<br>');
