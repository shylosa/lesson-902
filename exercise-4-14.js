"use strict";

let second = 1;
let minute = 60 * second;
let hour = 60 * minute;
let day = 24 * hour;
let month = 31 * day;

alert ('Секунд в часе: ' + hour);
alert ('Секунд в сутках: ' + day);
alert ('Секунд в месяце: ' + month);

/*Вывод квази-текущего времени*/
let currentHour = 23;
let currentMinute = 15;
let currentSecond = 42;

alert ('Текущее время - ' + currentHour + ':' + currentMinute + ':' + currentSecond);

/*Создание переменной и вывод её квадрата на экран*/
let num;
num = 7;
alert('Квадрат числа ' + num + ' = ' + num * num);




