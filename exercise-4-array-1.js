"use strict";

/*Массивы 1*/
let arr = [];
let increment = 'x';

document.write('Задача 1' + '<br>');
for (let i = 0; i <= 9; i++){
  arr.push(increment);
  increment += 'x';
  document.write(arr + '<br>');
}
document.write('<br>');

/*Массивы 2*/
let arr2 = [];
let userString;

document.write('Задача 2' + '<br>');
for (let i = 1; i < 10; i++){
  userString = '';
  for (let j = 0; j < i; j++){
    userString += i;
  }
  arr2.push(userString);
  document.write(arr2 + '<br>');
}
document.write('<br>');

/*Массивы 3*/
function arrayFill(arrayElementValue, arrayDimension) {
  let arrayTemporary = [];
  for (let i = 0; i < arrayDimension; i++){
    arrayTemporary.push(arrayElementValue);
  }
  return arrayTemporary;
}

let arr3 = arrayFill('x', 5)
document.write('Задача 3' + '<br>');
document.write(arr3 + '<br>' + '<br>');

/*Массивы 4*/
function arraySumNumber(arrayIn) {
  let sumOfElement = 0;
  let i = 0;
  while (sumOfElement < 10){
    sumOfElement += arrayIn[i];
    i++;
  }
  return i; //Возвращаем это число, т.к. итератор один "лишний" раз увеличивается на 1 (что нам очень удобно и нужно)
}

let userArray = [2,3,3,1,0,5,8];
let arrayNumber = arraySumNumber(userArray);

document.write('Задача 4' + '<br>');
document.write(userArray + '<br>');
document.write('Число просуммированных элементов: ' + arrayNumber + '<br>' + '<br>');

/*Массивы 5*/
function arrayReverse(arrayIn) {
  let arrayOut = [];
  for (let i = arrayIn.length-1; i >= 0; i--){
    arrayOut.push(arrayIn[i]);
  }
  return arrayOut;
}

let userArray2 = [2,3,3,1,0,5,8];
let arrayReversed = arrayReverse(userArray2);

document.write('Задача 5' + '<br>');
document.write('Исходный массив: ' + '[' + userArray2 + ']' + '<br>');
document.write('Обращённый массив: ' + '[' + arrayReversed + ']' + '<br>' + '<br>');

/*Массивы 6*/

let userArray6 = [[1,1,3],[5],[8,9,12,13],[4,6,9]];
let userSumArray6 = 0;

for (let i = 0; i < userArray6.length; i++){
  for (let j = 0; j < userArray6[i].length; j++){
    userSumArray6 += userArray6[i][j];
  }
}

let arrayOutScreen6 = '';

function separator (arrayName, iter){
  let sign = '';
  if (iter !== (arrayName.length-1)) {
    sign = ',';
  }
  return sign;
}

for (let i = 0; i < userArray6.length; i++){

  arrayOutScreen6 += '[' + userArray6[i] + ']' + separator(userArray6, i);
}

arrayOutScreen6 = '[' + arrayOutScreen6 + ']';

document.write('Задача 6' + '<br>');
document.write('Исходный массив: ' + arrayOutScreen6 + '<br>');
document.write('Сумма элементов двумерного массива: ' + userSumArray6 + '<br>' + '<br>');

/*Массивы 7*/
let userArray7 = [[[1,2],[3,4]],[[5,6],[7,8]]];
let userSumArray7 = 0;

for (let i = 0; i < userArray7.length; i++){
  for (let j = 0; j < userArray7[i].length; j++){
    for(let k = 0; k < userArray7[i][j].length; k++){
      userSumArray7 += userArray7[i][j][k];
    }
  }
}

let arrayOutScreen7 = '';
for (let i = 0; i < userArray7.length; i++){
  let storage7 = '';
  for (let j = 0; j < userArray7[i].length; j++){
    storage7 += '[' + userArray7[i][j] + ']' + separator(userArray7[i][j], j);
  }
  arrayOutScreen7 += '[' + storage7 + ']' + separator(userArray7[i], i);
}

arrayOutScreen7 = '[' + arrayOutScreen7 + ']';

document.write('Задача 7' + '<br>');
document.write('Исходный массив: ' + arrayOutScreen7 + '<br>');
document.write('Сумма элементов трёхмерного массива: ' + userSumArray7 + '<br>');