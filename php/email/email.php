<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (!class_exists('EMailer')) {
   class EMailer {
      public $mail;

      public function __construct($exceptions = false, $smtp = array()) {
         //New PHPMailer instance
         $this->mail = new PHPMailer($exceptions);

         //SMTP setup, if necessary
         if (!empty(setup)) {
            $this->mail->SMTPDebug = $smtp['debug'];   // Enable verbose debug output
            $this->mail->isSMTP();                     //Set mailer to use SMTP
            $this->mail->Host = $smtp['host'];         //Specify main and backup SMTP servers
            $this->mail->SMTPAuth = $smtp['auth'];     //Enable SMTP Authentication
            $this->mail->Username = $smtp['username']; //SMTP usaername
            $this->mail->Password = $smtp['password']; //SMTP password
            $this->mail->SMTPSecure = $smtp['secure']; //Enable TLS encryption, 'ssl' also accepted
            $this->mail->Post = $smtp['port'];         //TCP port to connect to
         }
      }

      public function mail($to = array(), $subject, $html, $from = array(), $plaintext = false, $cc = array(), $bcc = array(), $attachment) {
         //Required parameters are $to, $from, $subject and $html
         if (empty($to) || empty($from) || empty($subject) || empty($html)) {
            die("Missing a Parameter");
         }

         //Sender
         $this->mail->setFrom($from['mail'], $from['name']);
         $this->mail->addReplyTo($from['mail'], $from['name']);

         //Recipients
         if (!empty($to)) {
            foreach($to as $recipient) {
               $this->mail->addAddress($recipient['email'], $recipient['name']);
            }
         }

         // CC
         if (!empty($cc)) {
            foreach($cc as $recipient) {
               $this->mail->addCC($recipient['email']);
            }
         }

         // BCC
         if (!empty($bcc)) {
            foreach($bcc as $recipient) {
               $this->mail->addBCC($recipient['email']);
            }
         }

         //Attachments
         if (!empty($attachments)) {
            foreach($attachments as $attachment) {
               $this->mail->addAttachment($attachment);
            }
         }

         // HTML email
         $this->mail->isHTML(true);
         $this->mail->Subject = $subject;
         $this->mail->Body = $html;

         //Plain text email
         if (false !== $plaintext) {
            $this->mail->AltBody = $plaintext;
         }

         // Send the mail
         try {
            $this->mail->send();
            echo 'Message sent Successfully';
         } catch (Exception $e) {
            echo 'Message could not be sent.  Mailer Error: ', $this->mail->ErrorInfo;
         }

      }
   }
}

?>