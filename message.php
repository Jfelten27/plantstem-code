<?php

// // get email from the config file
// $recipient_email = 'jfelten632@gmail.com';

// // contact information
// $contact_name = 'john doe';
// $contact_email = 'jfelten@zohomail.com';
// $message = 'hello, world!';
// $subject = 'testing...';

// // Email header
// $headers[] = 'MIME-Version: 1.0';
// $headers[] = 'Content-type: text/html; charset=utf-8';
// $headers[] = "To: $recipient_email";
// $headers[] = "From: $contact_email";
// $header = implode('\r\n', $headers);


// var_dump(mail($recipient_email, $subject, $message, $header));

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.zoho.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jfelten@zohomail.com';                     //SMTP username
    $mail->Password   = 'zohopass';                               //SMTP password
    $mail->SMTPSecure = 'tls';          //Enable implicit TLS encryption
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jfelten@zohomail.com', 'me');
    $mail->addAddress('jfelten@zohomail.com', 'me');     //Add a recipient

    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>