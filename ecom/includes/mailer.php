<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/Exception.php';
require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';       // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = '..................@gmail.com'; // Your Gmail address
    $mail->Password   = '..................';       // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('............@gmail.com', 'sender name');
    $mail->addAddress('................@gmail.com', 'receiver name');

    // Content
    $mail->isHTML(false); // Plain text
    $mail->Subject = 'Your Subject Here';
    $mail->Body    = 'This is the plain text message body';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>