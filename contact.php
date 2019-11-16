<?php
   require 'header.php';
   //require 'php/handle_email.php';

   ini_set('display_errors', 1);
   error_reporting(E_ALL);

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
            <?php if ( ! empty( $errors ) ) : ?>
            <div class="errors">
               <!-- Prints errors to the page -->
               <?php echo implode( '.</p><p class="bg-danger">', $errors ); ?>.
            </div>
            <!-- put display element script here again -->
            <!-- If message sent without errors print success message -->
            <?php elseif ( $sent ) : ?>
            <div class="success">
               <p class="bg-success">Thank You! Your message was sent. We'll be in touch.</p>
            </div>
            <!-- When a message is sent this script displays the form error element -->
            <script>
               document.querySelector('#form-heading').style.display = 'none';
               document.querySelector('#form-errors').style.display = "initial";
            </script>
            <?php endif; ?>
         </div>
         <form action="#" method="post" class="form" name="contact-form" target="_self">
            <div class="form-group">
               <label for="name">Full Name</label>
               <!-- Validate input using php handle_email.php -->
               <input type="text" name="name" id="form-name" placeholder="Full Name" value="<?php echo validate_input('name'); ?>" class="form-control">
            </div>
            <div class="form-group">
               <label for="email">Email Address</label>
               <!-- Validate input using php handle_email.php -->
               <input type="email" name="email" id="form-email" placeholder="Email Address" value="<?php echo validate_input('email'); ?>" class="form-control">
            </div>
            <div class="form-group">
               <label for="subject">Subject</label>
               <!-- Validate input using php handle_email.php -->
               <input type="text" name="subject" id="form-subject" placeholder="Subject" value="<?php echo validate_input('subject'); ?>" class="form-control">
            </div>
            <div class="form-group">
               <!-- Validate input using php handle_email.php -->
               <textarea name="message" id="" cols="50" rows="10" class="form-control"><?php echo validate_input('message'); ?></textarea>
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