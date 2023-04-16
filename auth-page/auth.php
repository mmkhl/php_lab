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
    <form action="../php/forms/authorization/login.php" method="POST">
      <div class="nad__strokoi">
        <h2 class="text__nad">Вход</h2>
      </div>
      <div class="form__input">
        <input type="text" name="username" placeholder="Пользователь">
      </div>
      <div class="form__input">
        <input type="password" name="password" placeholder="Пароль">
      </div>
      <a class="nad__btn" href="./registration.php">У вас нет аккаунта? Регистрация</a><br />
      <input class="form__btn" type="submit" name="submit" value="Авторизация">
    </form>
  </div>
</body>
</html>