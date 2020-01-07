<?php
   include 'header.php';
   include 'php/handle_email.php';
?>
   <main class="contact-container container">
      <h1 id="contact-h1">Contact Us</h1>
      <div id="contact-form">
         <div id="form-heading">
            <p>Have a question, conment, or concern?</p>
            <p>Leave us a message</p>
         </div>

         <?php  
            /*  */
            
            $errors = false;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {          
               echo '<br><div id=form-errors>';

               if (empty($_POST['name'])) {
                  $errors = true;
                  echo '<p class="error">Please enter your full name.</p>';
               } else {
                  $name = htmlentities($_POST['name']);
               }

               if (empty($_POST['email'])) {
                  $errors = true;
                  echo '<p class="error">Please enter your email address.</p>';
               } else {
                  $email = htmlentities($_POST['email']);
               }

               if (empty($_POST['subject'])) {
                  $errors = true;
                  echo '<p class="error">Please enter the email subject.</p>';
               } else {
                  $subject = htmlentities($_POST['subject']);
               }
               
               if (empty($_POST['message'])) {
                  $errors = true;
                  echo '<p class="error">Please enter your message.</p>';
               } else {
                  $message = htmlentities($_POST['message']);
               }
               if ($_POST['validate'] != 8) {
                  $errors = true;
                  echo '<p class="error">Your math is wrong! Please try again</p>';
               }

               if(!$errors) {
                  echo '<p class="success">Message Sent.  We will be in touch.</p>';
                  send_email($name, $email, $subject, $message);
               }
               echo '</div><br>';
            } 
         ?>
            
         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form" id="contact-form" >
            <div class="form-group">
               <div class="col-25">
                  <label for="name">Full Name</label>
               </div>
               <div class="75">
                  <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php if($errors) {echo $_POST['name'];}?>">
               </div>
            </div>
            <div class="form-group">
               <div class="col-25">
                  <label for="email">Email Address</label>
               </div>
               <div class="75">
                  <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php if($errors){ echo $_POST['email'];} ?>">
               </div>
            </div>
            <div class="form-group">
               <div class="col-25">
                  <label for="subject">Subject</label>
               </div>
               <div class="75">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php if($errors){ echo $_POST['subject'];} ?>">
               </div>
            </div>
            <div class="form-group">
               <div class="col-25">
                  <label for="message">Message</label>
               </div>
               <div class="75">
                  <textarea name="message" class="form-control"  rows="20"><?php if($errors){ echo $_POST['message'];} ?></textarea>
               </div>
            </div>
            <div class="form-group">
               <label for="validate" class='validate'>Are You Human?</label>
               <label class="validate">
                  <span>6 + 2 = </span>
                  <input type="text" name="validate" class="validate" placeholder="#" value="<?php if($errors){ echo $_POST['validate'];} ?>">
               </label>
            </div>
            <div class="row">
               <input type="submit" name="submit" class="form-button" value="Submit">
            </div>
         </form>
      </>
   </main>
<?php
   require 'footer.php';
?>