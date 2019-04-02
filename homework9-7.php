<?php
namespace serhii;

/*Задача оказалась сложнее, чем думал. Нашёл ответ в инете и затем разбирался с кодом*/

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/classes/FormCreator.php';

$form = new FormCreator();
echo $form->open(['action' => 'index.php', 'method' => 'post']);
echo $form->input(['type' => 'text', 'name' => 'login']);
echo $form->password(['name' => 'pass']);
echo $form->textarea(['name' => 'text', 'cols' => 100, 'rows' => 5]);
echo $form->submit();
echo $form->close();