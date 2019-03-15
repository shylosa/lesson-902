"use strict";

let salaries = {
    'Вася' : 100,
    'Петя' : 300,
    'Даша' : 250
};

let summ = 0;

for (let name in salaries){
    summ += salaries[name];
}

document.write(summ + '<br>');

let maxSalary = -Infinity;
let maxName;

for (let name in salaries) {
    if (salaries[name] > maxSalary) {
        maxSalary = salaries[name];
        maxName = name;
    }
}

if (!maxName){
    document.write('Нет сотрудников')
} else {
    document.write(maxName);
}

