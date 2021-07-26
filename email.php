<?php

$to      = 'info@expertinfo';
$subject = 'Отклик от сайта expertinfo.uz';
$message = "Ф.И.О: $_POST[name],\r\nПочта: $_POST[email],\r\nТелефон: $_POST[phone],\r\nКомпания: $_POST[company]";
$headers = "From: $_POST[email]\r\nReply-To: $_POST[email]\r\nX-Mailer: PHP/".phpversion();

if (mail($to, $subject, $message, $headers)) {
  header("Location: /");
};


?>