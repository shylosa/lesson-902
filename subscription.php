<?php ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Подписка</title>

  <link rel="stylesheet" href="main.css">
</head>

<body>

  <form method = "post" action="action-subscription.php">

    <div class="row">
      <label for = "email">Email</label>
      <input type = "email" name = "email" id = "email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
      <?= !empty($errors['email']) ? $errors['email'] : '' ?>
    </div>

    <button>Подписаться</button>
  </form>

</body>

</html>