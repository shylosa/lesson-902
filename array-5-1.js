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

// /*Массивы 3*/
// function arrayFill(arrayElementValue, arrayDimension) {
//   let arrayTemporary = [];
//   for (let i = 0; i < arrayDimension; i++){
//     arrayTemporary.push(arrayElementValue);
//   }
//   return arrayTemporary;
// }
//
// let arr3 = arrayFill('x', 5)
// document.write('Задача 3' + '<br>');
// document.write(arr3 + '<br>' + '<br>');
//
// /*Массивы 4*/
// function arraySumNumber(arrayIn) {
//   let sumOfElement = 0;
//   let i = 0;
//   while (sumOfElement < 10){
//     sumOfElement += arrayIn[i];
//     i++;
//   }
//   return i; //Возвращаем это число, т.к. итератор один "лишний" раз увеличивается на 1 (что нам очень удобно и нужно)
// }
//
// let userArray = [2,3,3,1,0,5,8];
// let arrayNumber = arraySumNumber(userArray);
//
// document.write('Задача 4' + '<br>');
// document.write(userArray + '<br>');
// document.write('Число просуммированных элементов: ' + arrayNumber + '<br>' + '<br>');
//
// /*Массивы 5*/
// function arrayReverse(arrayIn) {
//   let arrayOut = [];
//   for (let i = arrayIn.length-1; i >= 0; i--){
//     arrayOut.push(arrayIn[i]);
//   }
//   return arrayOut;
// }
//
// let userArray2 = [2,3,3,1,0,5,8];
// let arrayReversed = arrayReverse(userArray2);
//
// document.write('Задача 5' + '<br>');
// document.write('Исходный массив: ' + '[' + userArray2 + ']' + '<br>');
// document.write('Обращённый массив: ' + '[' + arrayReversed + ']' + '<br>' + '<br>');
//
// /*Массивы 6*/
//
// let userArray6 = [[1,1,3],[5],[8,9,12,13],[4,6,9]];
// let userSumArray6 = 0;
//
// for (let i = 0; i < userArray6.length; i++){
//   for (let j = 0; j < userArray6[i].length; j++){
//     userSumArray6 += userArray6[i][j];
//   }
// }
//
// let arrayOutScreen6 = '';
//
// function separator (arrayName, iter){
//   let sign = '';
//   if (iter !== (arrayName.length-1)) {
//     sign = ',';
//   }
//   return sign;
// }
//
// for (let i = 0; i < userArray6.length; i++){
//
//   arrayOutScreen6 += '[' + userArray6[i] + ']' + separator(userArray6, i);
// }
//
// arrayOutScreen6 = '[' + arrayOutScreen6 + ']';
//
// document.write('Задача 6' + '<br>');
// document.write('Исходный массив: ' + arrayOutScreen6 + '<br>');
// document.write('Сумма элементов двумерного массива: ' + userSumArray6 + '<br>' + '<br>');
//
// /*Массивы 7*/
// let userArray7 = [[[1,2],[3,4]],[[5,6],[7,8]]];
// let userSumArray7 = 0;
//
// for (let i = 0; i < userArray7.length; i++){
//   for (let j = 0; j < userArray7[i].length; j++){
//     for(let k = 0; k < userArray7[i][j].length; k++){
//       userSumArray7 += userArray7[i][j][k];
//     }
//   }
// }
//
// let arrayOutScreen7 = '';
// for (let i = 0; i < userArray7.length; i++){
//   let storage7 = '';
//   for (let j = 0; j < userArray7[i].length; j++){
//     storage7 += '[' + userArray7[i][j] + ']' + separator(userArray7[i][j], j);
//   }
//   arrayOutScreen7 += '[' + storage7 + ']' + separator(userArray7[i], i);
// }
//
// arrayOutScreen7 = '[' + arrayOutScreen7 + ']';
//
// document.write('Задача 7' + '<br>');
// document.write('Исходный массив: ' + arrayOutScreen7 + '<br>');
// document.write('Сумма элементов трёхмерного массива: ' + userSumArray7 + '<br>');