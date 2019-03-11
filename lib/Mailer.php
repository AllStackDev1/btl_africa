<?php
class Mailer {

  public function sendContactUsMessage($name, $email, $comments, $user_subject){
  
    $messageBody = 'Hello,'. $name . ' with email'.  $email .' sent a message.';
    $messageBody .= $comments;
    $to = 'squarcoo@btlafrica.com';
    $subject = $user_subject;
    $headers = "From: info@btlafrica.com\r\n";
    $headers .= "Reply-To:". $email ."\r\n";
    $headers .= "MIME-VERSION: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    return mail($to, $subject, $messageBody, $headers);
  }
}