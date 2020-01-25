<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      use PHPMailer\PHPMailer\SMTP;

      include '../../phpmailer/PHPMailer/src/Exception.php';
      include '../../phpmailer/PHPMailer/src/PHPMailer.php';
      include '../../phpmailer/PHPMailer/src/SMTP.php';
      include 'khp_variables.php';
      // Show errors for debugging.  Remove for production
      // error_reporting(E_ALL);
      // ini_set('display_errors', 1);

      

      function send_email($name, $email, $subject, $message){
         
            global $mail_user;
            global $mail_pass;
            global $mail_auth;
            global $mail_host;
            global $mail_secure;
            global $mail_port;

            $mail = new PHPMailer;
            //Server Settings
            $mail->isSMTP();  
            $mail->Host = $mail_host; 
            $mail->Port = $mail_port; // typically 587 
            $mail->SMTPSecure = $mail_secure; // ssl is depracated
            $mail->SMTPAuth = $mail_auth;
            $mail->Username = $mail_user;
            $mail->Password = $mail_pass;
            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress("darlis@katieshandprint.org", "Katie's Handprint");
            // Message Content 
            $mail->Subject = $subject;
            $mail->Body = $message; // remove if you do not want to send HTML email
            $mail->AltBody = $message;
            // Send the Message
            $mail->send();
      }
?>
