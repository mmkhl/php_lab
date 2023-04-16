<?php include '../conQuery.php';
include '../queryDB.php';
$count = 0;
foreach ($_REQUEST as $res) {
  if ($res) {$count++;}
}
print("Количество правильных ответов: " . $count . "");
