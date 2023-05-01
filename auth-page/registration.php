<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/auth.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Log in</title>
</head>

<body>
  <div class="autorization__block">
    <form action="../php/forms/authorization/reg_user.php" method="POST">
      <div class="nad__strokoi">
        <h2 class="text__nad">Регистрация</h2>
      </div>
      <div class="form__input">
        <input type="text" name="name_user" placeholder="Имя" pattern="[a-zA-Zа-яА-ЯёЁ\s]+" required>
      </div>
      <div class="form__input">
        <input type="text" name="surname" placeholder="Фамилия">
      </div>
      <div class="form__input">
        <input class="login" type="text" name="login" placeholder="Логин">
      </div>
      <div class="form__input">
        <input type="password" name="password" placeholder="Пароль">
      </div>
      <div class="form__input">
        <input type="password" name="password_repeat" placeholder="Повтор пароля">
      </div>
      <a class="nad__btn" href="./auth.php">У вас есть аккаунт? Войдите</a><br />
      <input class="form__btn" type="submit" name="submit" value="Зарегистрироваться">
    </form>
  </div>

</body>

</html>