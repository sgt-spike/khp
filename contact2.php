<?php
   require 'header.php';
   //require 'php/handle_email.php';

   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   $operand_1 = rand(0,9);
   $operand_2 = rand(0,9);
   $solution = $operand_1 + $operand_2
   
   // $errors = array();
   // $sent = false;

   // if (! empty($_POST)) {
   //    $process = process_form($_POST);

   //    //Check for Errors
   //    if (! empty($process['message'])){
   //       $errors[] = $process['message'];
   //    } else if (! empty($process['errors'])){
   //       $errors = $process['errors'];
   //    } else {
   //       $sent = true;
   //    }
   // }
?>
   <main class="container contact-container">
      <h1 id="contact-h1" class="main-h1">Contact Us</h1>
      <div id="contact-form">
         <div id="form-heading">
            <p>Have a question, conment, or concern?</p>
            <p>Leave us a message</p>
         </div>
         <div id="form-errors">
            <!-- PHP if statement to determine errors.  If so print the errors, otherwise print success message -->
            <!-- If there are errors, print the errors -->
            <div class="errors">
               <!-- Prints errors to the page -->
            </div>
            <!-- put display element script here again -->
            <!-- If message sent without errors print success message -->
            <div class="success">
               <p class="bg-success">Thank You! Your message was sent. We'll be in touch.</p>
            </div>
            <!-- When a message is sent this script displays the form error element -->
            <script>
               document.querySelector('#form-heading').style.display = 'none';
               document.querySelector('#form-errors').style.display = "initial";
            </script>

         </div>
         <form action="#" method="post" class="form" name="contact-form" target="_self">
            <div class="form-group">
               <label for="name">Full Name</label>
               <!-- Validate input using php handle_email.php -->
               <input type="text" name="name" id="form-name" placeholder="Full Name" value="<?php if (isset($_POST['name'])) { print $_POST['name']; } ?>" class="form-control">
            </div>
            <div class="form-group">
               <label for="email">Email Address</label>
               <!-- Validate input using php handle_email.php -->
               <input type="email" name="email" id="form-email" placeholder="Email Address" value="<?php if (isset($_POST['email'])) { print $_POST['email']; } ?>" class="form-control">
            </div>
            <div class="form-group">
               <label for="subject">Subject</label>
               <!-- Validate input using php handle_email.php -->
               <input type="text" name="subject" id="form-subject" placeholder="Subject" value="<?php if (isset($_POST['subject'])) { print $_POST['subject']; } ?>" class="form-control">
            </div>
            <div class="form-group">
               <!-- Validate input using php handle_email.php -->
               <textarea name="message" id="" cols="50" rows="10" class="form-control"><?php if (isset($_POST['message'])) { print $_POST['message']; } ?></textarea>
            </div>
            <label for="validate" class='validate'>Are You Human?</label><br>
            <label class="validate">
               <span id="operand-1"><?php echo $operand_1; ?></span><span> + </span><span id="operand-2"><?php echo $operand_2; ?></span><span> = </span>
               <input type="text" name="validate" id="form-validate" class="validate" placeholder="#">
            </label>
            <div class="form-group">
               <button type="reset" id="cancel" class="btn btn-primary btn-lg">Cancel</button>
               <button type="submit" id="submit" class="btn btn-primary btn-lg" value="Processing Message!">Submit</button>
            </div>
         </form>
      </div>
   </main>
<?php
   require 'footer.php';
?>