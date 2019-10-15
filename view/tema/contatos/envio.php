<?php
$to      = $_GET['txtinputemail'];
$subject = 'Contato - Loja Freitas';
$message = $_GET['txtinputarea'];
$headers = 'From: '. Config::EMAIL_HOST . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>