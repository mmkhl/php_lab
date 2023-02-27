<?php
include './conQuery.php';

if (isset($_POST)) {
  $q_addMsg = "INSERT INTO message_user (user_name, text) value ('" . $_POST['name'] . "', '" . $_POST['text'] . "')";
  $added_result = mysqli_query($link, $q_addMsg);
  if ($added_result) {
    header("Location: / ");
  } else {
    echo "Error: " . $q_addMsg . "<br>" . mysqli_error($link);
  }
}

?>
