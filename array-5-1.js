"use strict";

/*Массивы 1*/
let goods = ['red', 'green', 'blue', 'cyan', 'magenta'];
let lastElement = goods[goods.length - 1];

document.write('Задача 1' + '<br>'+'Исходный массив: ' + goods + '<br>');
document.write('Последний элемент массива: '+ lastElement + '<br>');
document.write('<br>');

/*Массивы 2*/
goods.push('Компьютер');

document.write('Задача 2' + '<br>' + 'Массив с добавленным элементом: ' + goods + '<br>');
document.write('<br>');

/*Массивы 3*/
let styles = ['Джаз', 'Блюз'];
document.write('Задача 3' + '<br>' + styles + '<br>');

styles.push('Рок-н-ролл');
document.write(styles + '<br>');

styles[styles.length - 2] = 'Классика';
document.write(styles + '<br>');

styles.shift();
document.write(styles + '<br>');

styles.unshift('Рэп', 'Регги');
document.write(styles + '<br>' + '<br>');

/*Задача 4*/
let arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];

let min = 0;
let max = arr.length - 1;
let rand = min + Math.floor(Math.random() * (max + 1 - min));

document.write('Задача 4' + '<br>'+'Исходный массив: ' + arr + '<br>');
document.write('Случайное значение из массива: ' + arr[rand] + '<br>');


/*Задача 5*/

document.write('Задача 5' + '<br>');

let arr5 = [];

while ( true ){
  let userInput = prompt('Введите число: ', '0');
  if ( checkData(userInput) === false) {
    break;
  } else arr5.push(userInput);
}

document.write('Сумма значений: ' + sumArray(arr5) + '<br>');

function checkData(userData){
  if (userData === '' || isNaN(userData) === true || userData == null) {
    return false;
  } else {
    return userData;
    }
}

function sumArray( array ) {
  let sum = 0;
  for(let i = 0; i < array.length; i++ ){
    sum += +array[i];
  }
  return sum;
}

