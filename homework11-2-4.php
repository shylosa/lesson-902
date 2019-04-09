<?php

if (!empty($_REQUEST['day'])) {
    $dayB = mktime(0, 0, 0, $_REQUEST['month'], $_REQUEST['day'], 2019);
    setcookie('birthday', $dayB);
    header('Location: homework11-2-4.php', TRUE, 303);
}
?>
<!DOCTYPE html>
<html>
<body>
<?php if (empty($_COOKIE['birthday'])) { ?>
  <p>Когда у вас день рождения?</p>
  <form action="" method="GET">
    <p>Введите число</p>
    <input type="text" name="day"><br>
    <p>Введите месяц</p>
    <input type="text" name="month"><br>
    <input type="submit" value="ok" name="ok">
  </form>
<?php } else {
    if (floor(($_COOKIE['birthday'] - time()) / (3600 * 24)) == 0) {
        echo "Поздравляем с днём рождения!!!";
    } else {
        echo "До дня рождения осталось " . floor(($_COOKIE['birthday'] - time()) / (3600 * 24)) . " дней";
    }
}

?>
</body>
</html>




