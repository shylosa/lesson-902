<?php

echo '<link rel="stylesheet" href="main.css">';

echo '<table class = "userTable">';
echo '<caption>Данные, загруженные из файла</caption>';
echo '<tr>';
echo '<th>Email</th>';
echo '<th>Password</th>';
echo '</tr>';

$fileName = 'users.txt';
$handle = @fopen($fileName, "r");

if ($handle) {

    while (($buffer = fgets($handle, 4096)) !== false) {
        $userData = explode("\t", rtrim($buffer));
        echo '<tr>';
            echo "<td>$userData[0]</td>";
            echo "<td>$userData[1]</td>";
        echo '</tr>';
    }

    if (!feof($handle)) {
        echo "Ошибка открытия файла $fileName\n";
    }
    fclose($handle);
}

echo '</table>';