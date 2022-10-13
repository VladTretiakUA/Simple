<?php
 $email = $_POST['email'];
 $message = $_POST['message'];

 $error = '';
 if (trim($email) == '')
   $error = 'Введіть ваше імя';
 else if (trim($message) == '')
   $error = 'Введіть повідомлення';
 else if(strlen($message) < 10)
   $error = 'Повідомлення має бути не менше 10 символів';

if($error !=''){
  echo $error;
  exit;
}

$subject ="=?utf-8?b?".base64_encode("Тестове повідомлення")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;chatset=utf-8\r\n";

mail('admin@mail.com', $subject, $message, $headers);

header('Location: /about.php');

 ?>
