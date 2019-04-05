<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
session_start();

/**
 * @param $data
 * @throws Exception
 */
function setData($data){
    if (isset($data['test'])){
        throw new Exception("key test doesn't exists");
    }

    $_SESSION['data'] = $data['test'];
}

try {
    setData('notest' =>'data');
} catch (Exception $exception) {
    echo 'Нет ключа test в массиве' . $exception->getMessage();
}
