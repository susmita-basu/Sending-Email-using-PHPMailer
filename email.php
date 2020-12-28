<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//try{


//Server settings
$mail = new PHPMailer;
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;     
//echo $mail->ErrorInfo."<br>";
$mail->isSMTP();                                                                         // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                                                   // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                                              // Enable SMTP authentication
$mail->Username   = '';                                 // SMTP username
$mail->Password   = '';                                           // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                                          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                                           // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom('','Susmita Basu Mallick');                                                                                 // sent from xyz mail
$mail->addAddress('');                                                                   // sent to xyz mail
//$mail->addAddress('ellen@example.com');                                                                                                 // Name is optional
$mail->addReplyTo('');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz');                                                                                         // Add attachments
$mail->addAttachment('image/tri.jpg', 'Family.jpg');                                                                                   // Optional name

// Content
$mail->isHTML(true);                                                                                                                 // Set email format to HTML
$mail->Subject = 'PHPMailer with attachment';
$mail->Body    = 'This mail is sent through <strong> PHPMailer Class </strong>with html support.';                                  // for mails which support html
$mail->AltBody = 'This mail is sent through PHPMailer class without html support.';                                                // for mails which doesnot support html

if($mail->send())
//$mail->send();
    echo 'Message has been sent';
else
    echo 'Mail not sent'."<br>".$mail->ErrorInfo;

//}
/*catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/

?>
