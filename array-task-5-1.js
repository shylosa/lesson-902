"use strict";

/*Задача 1*/
let mas = [15, 'hello', 'trump', 23, 'world', 999, 176];

document.write('Задача 1' + '<br>');

for (let i =0; i < mas.length; i++){
  document.write(i + ' --- ' + mas[i] + '<br>');
}

/*Задача 2*/
let mas2 = [2, 3, 4, 5, 6, 4, 77, 32, 4];

document.write('<br>' + 'Задача 2' + '<br>');

for (let i = 0; i < mas2.length; i++){
  if (mas2[i] > 5 ){
    document.write(i + ' - ' + mas2[i] + '<br>');
  }
}