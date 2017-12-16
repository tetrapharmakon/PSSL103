<?php

error_reporting(E_ALL ^ E_WARNING); 

// if(empty($_POST['token']) || $_POST['token'] !== $_SESSION['token']){
//   exit("Bad token!");
// }
// unset($_SESSION['token']);

// var_dump($_POST);

$serialized_data = json_encode($_POST);
$notifications_recipient = 'pssl103brno@gmail.com';

try {
  // Write the contents to the file,
  // using the FILE_APPEND flag to append the content to the end of the file
  // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
  $success = file_put_contents('list.json', $serialized_data.PHP_EOL, FILE_APPEND | LOCK_EX);

  // file_put_contents raises no exceptions on failure but it returns false
  if($success){
    $mail_subject = "[PSSL103-OK] Successful submission";
    mail($notifications_recipient, $mail_subject, $serialized_data);
    header("Location: success.php");
    die();
  } else {
    throw new Exception("file_put_contents unsuccessful");
  }
} catch (Exception $e) {
    $mail_subject = "[PSSL103-KO] Errorful submission: ".($e->getMessage());
    mail($notifications_recipient, $mail_subject, $serialized_data);
    header("Location: failure.php");
    die();
}

?>