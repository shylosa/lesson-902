"use strict";

let login = prompt ('Введите логин');
let password;

if (login === null){
    alert('Вход отменён');
}
else if (login !== 'Админ'){
    alert('Я вас не знаю');
} else {
    password = prompt('Введите пароль');

    if (password === 'Чёрный властелин'){
        alert('Добро пожаловать!');
    } else if (password !== null) {
        alert('Пароль неверен')
    } else {
        alert('Пароль отменён')
    }
}



