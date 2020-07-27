<?php
$fname = $_POST['fname'];
$email = $_POST['email'];
$cno = $_POST['cno'];
$message = $_POST['message'];
require 'phpmailer/PHPMailerAutoload.php';
$body = "Name: " . $fname . " Email: " . $email . " Contact: " . $cno . " Message: " . $message;
$subject="Ilha do Sol Contact: " . $fname;
$mail = new PHPMailer();
$mail->IsHTML(true); 
$mail->Host = "relay-hosting.secureserver.net";
$mail->From = $email;
$mail->Subject = $subject;
$mail->Body = $body;
$mail->WordWrap = 50;
$mail->AddAddress("nandan.goan@gmail.com");
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: ../Contact/");
}