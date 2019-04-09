<?php

//Задача 1-2
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea') . '<br>';

//Задача 1-5
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea') . '<br>';

//Задача 1-9
echo preg_replace('#2\+3#', '!', '2+3 223 2223') . '<br>';

//Задача 1-14
echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa') . '<br>';

//Задача 2-5
echo preg_replace('#a\d+a#', '!', 'a1a a22a a333a a4444a a55555a aba aca') . '<br>';

//Задача 2-8
echo preg_replace('#a\W+b#', '!', 'ave a#b a2b a$b a4b a5b a-b acb') . '<br>';

//Задача 2-19
echo preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa') . '<br>';




