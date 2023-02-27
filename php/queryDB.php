<?php
$q_info = "SELECT * FROM content WHERE category = 'content' ";
$r_info = mysqli_query($link, $q_info) or die(mysqli_error($link));
//Формируем тестовый запрос:
$q_about = "SELECT * FROM content WHERE category = 'about' ";
//Делаем запрос к БД, результат запроса пишем в:
$r_about = mysqli_query($link, $q_about) or die(mysqli_error($link));

$q_msg = "SELECT * FROM message_user";
$r_msg = mysqli_query($link, $q_msg) or die(mysqli_error($link));

$message = mysqli_fetch_array($r_msg);


$msg_array = [];
while ($msg = mysqli_fetch_array($r_msg)) {
  array_push($msg_array, $msg);
}

$about_arr = [];
$info = mysqli_fetch_array($r_info);
//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
while ($about = mysqli_fetch_array($r_about)) {
  array_push($about_arr, $about['text']);
}
