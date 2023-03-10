<?php
$q_users = 'SELECT username, surname, login FROM users;';
$r_users = mysqli_query($link, $q_users) or die(mysqli_error($link));

$users = [];
while ($users_result = mysqli_fetch_array($r_users)) {
  array_push($users, $users_result);
}






?>