<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $POST['subject'];
$message = $_POST['message'];

$email_from = 'nebeyoumusie4@gmail.com';
$email_subject = 'New Form Subission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Useer message: $message.\n";

$to = 'nebeyoumusie@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Replay-to: $visitor_email \r\rn";
mail($to,$email subject,$email body,$headers);
header("Location: contact.html");
?>