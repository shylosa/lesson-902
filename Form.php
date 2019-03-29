<?php

spl_autoload_register(function ($name){
    require __DIR__ . '/classes/' . $name . '.php';
});

$form = new Form('post', 'action.php');
$email = new InputFormField('email');
$form->addField($email);
$form->addField(new InputFormField('password'));
$form->addField(new InputFormField('passwordConfirmation'));

echo $form->render();