<?php
include '../../conQuery.php';
session_start();
if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST['username'];
  $password = password_hash($$_POST['password'], PASSWORD_DEFAULT);
  if (empty($username) &&  empty($password))
    echo "вы ничего не ввели";
  else {
    $q_user = 'SELECT * FROM users WHERE login = "' . $username . ' " ';
    $r_auth = mysqli_query($link, $q_user) or die(mysqli_error($link));
    $user_data = [];

    while ($data = mysqli_fetch_array($r_auth)) {
      array_push($user_data, $data);
    }
    foreach ($user_data as $data_db) {
      $_SESSION['name_user'] = $data_db[2];
      $_SESSION['surname'] = $data_db[1];
      if (password_verify($_POST['password'], $data_db[4])) {
        header("Location: / ");
      } else {
        header("Location: /auth.php ");
      }
    }
  }
}
?>
