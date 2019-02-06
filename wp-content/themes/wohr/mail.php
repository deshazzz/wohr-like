<?php
// require 'PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$userName = $_POST["name"];
$userEmail = $_POST["email"];
$userTel = $_POST["tel"];
$userMessage = $_POST["message"];
// echo $data;

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'host54.registrar-servers.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Port = 465;

$mail->Username = 'noreply@smartparkingco.com';                 // SMTP username
$mail->Password = 'Roxy321@';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'noreply@smartparkingco.com';
$mail->FromName = 'Roxy Garage Website';
$mail->addAddress('noreply@smartparkingco.com');     // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Contact-Us';
$mail->Body    = 'Name: '.$userName . '<br> Email: '.$userEmail . '<br> Mobile Number: '.$userTel . '<br> Message: '.$userMessage;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}