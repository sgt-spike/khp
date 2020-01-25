<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_contact);
   include $khp_header;
   include 'php/handle_email.php';
?>
      <section class="content-header">
         <header>
            <h1 class="main-h1">Contact Us</h1>
         </header>
      </section>
      <section class="content form-content">
         <div class="khp-form contact">
            <header class="form-heading">
               <h2>Have a question, conment, or concern?<br>Leave us a message</h2>
            </header>

         <?php  
            /*  */
            
            $errors = false;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {          
               echo '<div class="form-errors">';

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
            
         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group name">
               <label for="name">Full Name</label>
               <input type="text" name="name" class="form-control  form-control-lg" placeholder="Full Name" value="<?php if($errors) {echo $_POST['name'];}?>">
            </div>
            <div class="form-group email">
               <label for="email">Email Address</label>
               <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" value="<?php if($errors){ echo $_POST['email'];} ?>">
            </div>
            <div class="form-group subject">
               <label for="subject">Subject</label>
               <input type="text" name="subject" class="form-control form-control-lg" placeholder="Subject" value="<?php if($errors){ echo $_POST['subject'];} ?>">
            </div>
            <div class="form-group message">
               <label for="message">Message</label>
               <textarea name="message" class="form-control  form-control-lg" rows=20><?php if($errors){ echo $_POST['message'];} ?></textarea>
            </div>
            <div class="form-group validate">
               <label for="validate" class='validate'>Are You Human?</label>
               <label class="validate">
                  <span>6 + 2 = </span>
                  <input type="text" name="validate" class="validate" placeholder="#" value="<?php if($errors){ echo $_POST['validate'];} ?>">
               </label>
            </div>
            <div class="form-group submit">
               <button type="submit" name="submit" class="btn btn-lg" value="Submit">Submit</button>
            </div>
         </form>
      </div>
   </section>
<?php
   require $khp_footer;
?>