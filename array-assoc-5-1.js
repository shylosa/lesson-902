'use strict';

/*Задача 1*/
let personInfo = {
  'name' : 'Serhii',
  'age' : '38',
  'sex': 'male',
  'individualNumber' : '123456789'
};

document.write('Задача 1' + '<br>');

for (let i in personInfo){
  document.write( i + ' - ' + personInfo[i] + '<br>');
}

/*Задача 2*/
let personInfo2 = {
  'name' : 'Serhii',
  'age' : '38',
  'sex': 'male',
  'individualNumber' : '123456789'
};

let currentYear = 2019;

personInfo2.yearBirthday = function () {
  return currentYear - personInfo2.age;
};

//personInfo2.yearBirthday(personInfo2.age, currentYear);

document.write('<br>' + 'Задача 2' + '<br>');

for (let i in personInfo2){
  document.write( i + ' - ' + personInfo2[i] + '<br>');
}

/*Задача 3*/
let masArray = [5, 6, 34, 12, 45];
let arr3 = {'mas': masArray, 'volume' : [1, 5, 7]};
let sumMas = 0;

function getSum(array){
  for (let i in array){
    sumMas += array[i];
  }
  return sumMas;
}

document.write('<br>' + 'Задача 3' + '<br>');
document.write('Сумма mas = ' + getSum(arr3['mas']) + '<br>');

/*Задача 4*/
let vendorCode = {
  '00005' : [
    'Trek',
    '1200 у.е.',
    '10 кг',
    'Место для ссылки',
    'Есть в наличии'
  ],
  '00006' : [
    'Giant',
    '1300 у.е.',
    '10 кг',
    'Место для ссылки',
    'Есть в наличии'
  ]
};

document.write('<br>' + 'Задача 4' + '<br>');
document.write( 'Товар: ' + vendorCode['00005'] + '<br>');

/*Задача 5*/
let day = {
  'd1' : 'Понедельник',
  'd2' : 'Вторник',
  'd3' : 'Среда',
  'd4' : 'Четверг'
};

document.write('<br>' + 'Задача 5' + '<br>');

for (let i in day){
  document.write( i + ' - ' + day[i] + '<br>');
}

/*Задача 6*/
let arr = {
  'k1' : '17w4',
  'k2' : '1sfsg7',
  'k3' : '17nd',
  'k16' : '1237',
  'k14' : '1w37',
  '3k1' : '1wrw7'
};

document.write('<br>' + 'Задача 6' + '<br>');

for (let i in arr){
  document.write( i + ' *** ' + arr[i] + '<br>');
}

/*Задача 7 - не понял условие*/
let arr7 = {
  "k1" : "17w4",
  "k2" : "1sfsg7",
  "k3" : "17nd",
  "k16" : "1237",
  "k14" : "1w37",
  "3k1" : "1wrw7"
};

document.write('<br>' + 'Задача 7' + '<br>');

let charSum = '';
for (let key in arr7){
  document.write( key + ' : ' + arr7[key] + '<br>');
  charSum += key + arr7[key];
}

document.write( '<br>' + charSum + '<br>');

let localStorage = {'mass7' : charSum};
localStorage['mass7'] = localStorage['mass7'].split('');

document.write( '<br>' + localStorage['mass7'] + '<br>');

/*Задача 8*/
let goods8 = {
  "dd" : {
    "name": "Яблоки",
    "cost": 13
  },
  "dc" : {
    "name": "Груши",
    "cost": 23
  },
  "cd" : {
    "name": "Абрикосы",
    "cost": 33
  },
  "dee" : {
    "name": "Сливы",
    "cost": 43
  },
  "dd2" : {
    "name": "Вишни",
    "cost": 19
  },
};

document.write('<br>' + 'Задача 8' + '<br>');

for (let i in goods8){
  if ( Number(goods8[i].cost) > 20){
    document.write( goods8[i].name + ' : ' + goods8[i].cost + '<br>');
  }
}

/*Задача 9*/
let goods9 = {
  "apple" : {
    "name": "Яблоки",
    "cost": 230,
    "amount":300
  },
  "pear" : {
    "name": "Груши",
    "cost": 34,
    "amount":100
  },
  "apricot" : {
    "name": "Абрикосы",
    "cost": 23,
    "amount":170
  },
  "plum" : {
    "name": "Сливы",
    "cost": 21,
    "amount":250
  },
  "cherry" : {
    "name": "Вишни",
    "cost": 19,
    "amount":312
  },
};

document.write('<br>' + 'Задача 9' + '<br>');

let minCoast = 220;
let maxCoast = 300;
let minAmount = 200;

for (let i in goods9){
  if ( Number(goods9[i].cost) > minCoast &&
    Number(goods9[i].cost) < maxCoast &&
    Number(goods9[i].amount) > minAmount){

    document.write(i + '<br>');
    getKeys(goods9[i]);
  }
}

function getKeys(array) {
  for (let i in array){
    document.write(i + ' - ' + array[i] + '<br>');
  }
}