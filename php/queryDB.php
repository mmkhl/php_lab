<?php
$q_info = "SELECT * FROM content WHERE category = 'content' ";
$r_info = mysqli_query($link, $q_info) or die(mysqli_error($link));
//Формируем тестовый запрос:

$q_msg = "SELECT * FROM message_user";
$r_msg = mysqli_query($link, $q_msg) or die(mysqli_error($link));
$msg_array = [];
while ($msg = mysqli_fetch_array($r_msg)) {
  array_push($msg_array, $msg);
}



$q_about = "SELECT * FROM content WHERE category = 'about' ";
//Делаем запрос к БД, результат запроса пишем в:
$r_about = mysqli_query($link, $q_about) or die(mysqli_error($link));

$about_arr = [];
$info = mysqli_fetch_array($r_info);
//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
while ($about = mysqli_fetch_array($r_about)) {
  array_push($about_arr, $about['text']);
}

$q_question = 'SELECT id, question FROM questions';

$r_question = mysqli_query($link, $q_question) or die(mysqli_error($link));

$quest_arr = [];

while ($questions = mysqli_fetch_array($r_question)) {
  array_push($quest_arr, $questions);
}




$q_answer = 'SELECT id_question ,answer FROM questions, answers where id=id_question';

$r_answer = mysqli_query($link, $q_answer) or die(mysqli_error($link));

$answ_arr = [];

while ($answers = mysqli_fetch_array($r_answer)) {
  array_push($answ_arr, $answers);
}
