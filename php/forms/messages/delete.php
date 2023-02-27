<?php

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'lab_work'; //имя базы данных







//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

$q_delete = 'DELETE FROM message_user WHERE id= ' . $_POST['msg_id'] . '';

if (isset($_POST)) {
  echo '<h1>' . $_POST['msg_id'] . '</h1>';
  print("msg id: " . $_POST['msg_id']);
  $r_delete = mysqli_query($link, $q_delete) or die(mysqli_error($link));
}

?>

<script type="text/javascript">
  document.location.replace("/");
</script>