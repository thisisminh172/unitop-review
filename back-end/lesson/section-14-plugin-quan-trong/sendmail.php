<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'gadibo172@gmail.com'; // SMTP username
    $mail->Password = '172199321'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->CharSet = 'UTF-8'; //thêm tiếng Việt

    //Recipients
    $mail->setFrom('gadibo172@gmail.com', 'Minh Le');
    $mail->addAddress('minhl93172@gmail.com', 'gavolo'); // Add a recipient
    //$mail->addAddress('ellen@example.com'); // Name is optional
    $mail->addReplyTo('gadibo172@gmail.com', 'Minh Le');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('minhle.jpg'); // Add attachments
    $mail->addAttachment('minhle.jpg', 'minh.jpg'); // Optional name

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Gửi mail từ unitop';
    $mail->Body = '<b>thông tin được gửi từ trương trình php master</b>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Đã gửi thành công';
} catch (Exception $e) {
    echo "Email không được gửi. Mailer Error: {$mail->ErrorInfo}";
}
?>