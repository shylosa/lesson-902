"use strict";

/*Циклы*/
var result;

for (var i = 1; i <= 9; i++){
  for (var j = 1; j <= 9; j++){
   result = i * j;
    document.write(i + ' x ' + j + ' = ' + result + '<br>');
    if(j === 9) document.write('<br>');
  }
}

/*Циклы 2*/

var str = '';

for(i = 1; i <= 9; i++){
  str += i;
}

document.write(str + '<br>');

/*Циклы 3*/

var str2 = '';

for(i = 9; i > 0; i--){
  str2 += i;
}

document.write(str2 + '<br>');

/*Циклы 4*/

str = '-';

for(i = 1; i <= 9; i++){
  str = str + i + '-';
}

document.write(str+ '<br>');

/*Циклы 5*/

str = 'x';

for(i = 1; i <= 20; i++){
  document.write(str + '<br>');
  str += 'x';
}

/*Циклы 6*/
for (i = 1; i <= 9; i++){
  for (j = 1; j <= i; j++){
    document.write(i);
  }
  document.write('<br>');
}

/*Циклы 7*/
result = 'xx';
for (i = 1; i <= 5; i++){
  result += 'xx';
  document.write(result + '<br>');
  }