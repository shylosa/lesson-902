"use strict";

let arr = [5, 4, 3, 8, 0];

let filtered = filterRange(arr, 3, 5);

function filterRange (inputArray, diapmin, diapmax){
  let filteredArray = [];
  for (let i = 0; i < inputArray.length; i++){

    if (inputArray[i] > diapmin && inputArray[i] < diapmax) {
      filteredArray.push( inputArray[i] );
    }
  }
  return filteredArray;
}

document.write('Задача 7' + '<br>');
document.write(filtered + '<br>');
