<?php
namespace serhii;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/classes/FormCreator.php';
require_once __DIR__ . '/classes/SmartForm.php';

$form = new SmartForm();
echo $form->open(['action' => 'index.php', 'method' => 'post']);
echo $form->input(['type' => 'text', 'name' => 'login']);
echo $form->password(['name' => 'pass']);
echo $form->textarea(['name' => 'text', 'cols' => 100, 'rows' => 5]);
echo $form->submit();
echo $form->close();