<?php
$to = $mail;
$subject = 'e-mail confirm';
$message = "http://localhost:81/jikkenB/api/test/confirm.php";
$headers = 'From: c011732515@edu.teu.ac.jp';

mail($to, $subject, $message, $headers);
