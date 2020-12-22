<?php
require "PHPMailer/PHPMailerAutoload.php";
$mail = new PHPMailer;

try {
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'firasabdennadher82@gmail.com';                     // SMTP username
    $mail->Password   = 'Aspirinejoker0';                               // SMTP password
    $mail->SMTPSecure = 'tls';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('firasabdennadher82@gmail.com', 'firass');
    $mail->addAddress('firasabdennadher82@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('firasabdennadher82@gmail.com');               // Name is optional
    $mail->addReplyTo('firasabdennadher82@gmail.com', 'Information');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
