<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Show errors for debugging.  Remove for production
error_reporting(E_ALL);
ini_set('display_errors', 1);
$whitelist = array('name', 'email', 'subject', 'message');
// Email Address where to send message
$email_address = 'webmaster@spikedevelopments.com';

// Process the form data
function process_form($post) {
   // Validate the math check
   if ( ! validate_math( $post['validate'], 8 ) ) {
     return array( 'status' => 0, 'message' => 'Your math is suspect' );
   }
 
   // Validate email
   if ( ! validate_email( $post['email'] ) ) {
     return array( 'status' => 0, 'message' => 'That is not a valid email address' );
   }
 
   // Validate data
   $validation = validate_data( $post );

   if ( ! $validation['status'] ) {
     return array( 'status' => 0, 'errors' => $validation['data'] );
   }

   // Use validated data
   $data = $validation['data'];
   
   // Process database actions
   // if ( ! process_database( $data ) ) {
   //   return array( 'status' => 0, 'message' => 'Unable to process database request' );
   // }
 
   // Process email
   // echo process_email( $data );
   if ( ! process_email( $data ) ) {
      // print_r(error_get_last());
     return array( 'status' => 0, 'message' => 'Unable to send the email' );
   }
 
   return array( 'status' => 1 );
 }

 // Validate math
function validate_math( $value, $test ) {
   if ( intval( $value ) == $test ) {
     return true;
   }
 
   return false;
 }

 function validate_email( $email ) {
   if ( ! empty( $email ) && filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
     return true;
   }
 
   return false;
 }

 function validate_data( $post ) {
   // Globalize the whitelist
   global $whitelist;
 
   // Whitelist data
   foreach ( $whitelist as $key ) {
     $fields[$key] = $post[$key];
   }
 
   // Validate data
   $errors = array();
 
   foreach ( $fields as $field => $data ) {
     if ( empty( $data ) ) {
       $errors[] = 'Please enter your ' . $field;
     }
   }
 
   // Check for errors
   if ( empty( $errors ) ) {
     return array( 'status' => 1, 'data' => $fields );
   } else {
     return array( 'status' => 0, 'data' => $errors );
   }
 }

 // Check and process
function process_email( $post ) {
   // global $email_address;

   // // Set headers
   // $headers  = 'MIME-Version: 1.0' . "\r\n";
   // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   // $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
   // $headers .= sprintf( 'From: %s <%s>', $post['name'], $post['email'] );

   // // Send the email
   // return mail( $email_address, $post['subject'], $post['message'], $headers);

   $mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = "587"; // typically 587 
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = "btchriss@gmail.com";
$mail->Password = "Bac@@@2030";
$mail->setFrom($post['email'], $post['name']);
$mail->addAddress("btchriss@gmail.com", "Katie's Handprint");
$mail->Subject = $post['subject'];
$mail->msgHTML($post['message']); // remove if you do not want to send HTML email
$mail->AltBody = 'HTML not supported';
$mail->addAttachment('docs/crochure.pdf'); //Attachment, can be skipped

$mail->send();
 }
 
 // Validate input
 function validate_input( $input_name ) {
   global $sent;
 
   if ( empty( $_POST ) ) {
     return '';
   }
 
   if ( $sent ) {
     return '';
   }
 
   return _e( $_POST[$input_name] );
 }
 
 // Esacpe output
 function _e( $string ) {
   return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
 }