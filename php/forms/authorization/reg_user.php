<?php
include '../../conQuery.php';
session_start();


if ($_POST['login'] != '' && $_POST['password'] != '') {
  $hashed_pass = $_POST['password'];
  $_SESSION['password'] =  password_hash($hashed_pass, PASSWORD_DEFAULT);
  $q_addMsg = "INSERT INTO users (username, surname, login, password) value (
  '" . $_POST['name_user'] . "', 
  '" . $_POST['surname'] . "',
  '" . $_POST['login'] . "', 
  '" . $_SESSION['password'] . "')";
  $added_result = mysqli_query($link, $q_addMsg);
  var_dump($_SESSION['password']);
  header("Location: ../../../auth-page/auth.php ");
} else {
  echo "No data in input";
}

?>

<!-- 
<script type="text/javascript">
  document.location.replace("/auth.php"); /*делаем редирект на страницу авторизации*/
</script> -->