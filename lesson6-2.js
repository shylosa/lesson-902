"use strict";

let menu = {
    width : 100,
    height : 300,
    title : 'My menu'
};

multiplyNumeric(menu);
console.log(menu);

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n)
}

function multiplyNumeric(obj) {
    for (let prop in obj) {
        if ( isNumeric(obj[prop]) ){
            obj[prop] *= 2;
        }
    }
}

// let summ = 0;
//
// for (let name in salaries){
//     summ += salaries[name];
// }
//
// document.write(summ + '<br>');
//
// let maxSalary = -Infinity;
// let maxName;
//
// for (let name in salaries) {
//     if (salaries[name] > maxSalary) {
//         maxSalary = salaries[name];
//         maxName = name;
//     }
// }
//
// if (!maxName){
//     document.write('Нет сотрудников')
// } else {
//     document.write(maxName);
// }

