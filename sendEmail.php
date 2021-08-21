<!-- <!DOCType html>
<html> -->


<?php

// ini_set('SMTP', "server.com");
// ini_set('smtp_port', "25");
// ini_set('sendmail_from', "praise.babalola70@gmail.com");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';





$errors = [];
$errorMessage = '';

if (isset($_POST['submitBtn'])) {
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'praise.babalola70@gmail.com';
        $emailSubject = 'New email from your contant form';
        
        // $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
        $headers = 'From:praise.babalola70@gmail.com';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {

            //Server settings
            // $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'praise.babalola70@gmail.com';                     //SMTP username
            $mail->Password   = 'Babalola21!@';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($toEmail, 'Tob User');     //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject =  $emailSubject ;
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            
            if ($mail->send()) {
                // header('Location: index.html');
            $successMessage= "<script> alert('thank you. Your message has been received.' )</script>";
           
            } else {
                $errorMessage = 'Oops, something went wrong. Please try again later';
            }
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

       
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>
