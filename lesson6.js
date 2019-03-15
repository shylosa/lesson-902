"use strict";

let user = {};
user.name = 'Сергей';
user.surname = 'Шило';
user.name = 'Уася';

delete user.name;

console.log(user);