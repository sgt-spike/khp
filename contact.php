<?php
   require 'header.php';
   //require 'php/sendmessage.php';

   $errors = array();
   $sent = false;

   if (! empty($_POST)) {
      $process = process_form($_POST);

      //Check for Errors
      if (! empty($process['message'])){
         $errors[] = $process['message'];
      } else if (! empty($process['errors'])){
         $errors = $process['errors'];
      } else {
         $sent = true;
      }
   }
?>
   <main class="container">
      <h1 id="contact-h1" class="main-h1">Contact Us</h1>
      <div id="contact-form">
         <div id="form-heading">
            <p>Have a question, conment, or concern?</p>
            <p>Leave us a message</p>
         </div>
         <div id="form-errors">
            <div class="errors">
               <p class="bg-danger"></p>
            </div>
            <!-- <script>
               document.querySelector('#form-heading').style.display = 'none';
               document.querySelector('#form-errors').style.display = "initial";
               </script> -->
            <div class="success">
               <p class="bg-success">Your message was sent. We'll be in touch.</p>
            </div>
            <!-- <script>
               document.querySelector('#form-heading').style.display = 'none';
               document.querySelector('#form-errors').style.display = "initial";
               </script> -->
         </div>
         <form action="#" method="post" class="form" name="contact-form" target="_self">
               <label for="name">Full Name</label><br>
               <input type="text" name="name" id="form-name" placeholder="Full Name" value=""><br><br>
               <label for="email">Email Address</label><br>
               <input type="email" name="email" id="form-email" placeholder="Email Address" value=""><br><br>
               <label for="subject">Subject</label><br>
               <input type="text" name="subject" id="form-subject" placeholder="Subject" value=""><br><br><br>
               <textarea name="message" id="" cols="70" rows="20"></textarea><br><br>
               <label for="validate" class='validate'>Are You Human?</label><br>
               <label class="validate">
                  <span>6 + 2 = </span>
                  <input type="text" name="validate" id="form-validate" class="validate" placeholder="#">
               </label>
               <button type="reset" id="cancel">Cancel</button>
               <button type="submit" id="submit">Submit</button>
         </form>
      </div>
   </main>
<?php
   require 'footer.php';
?>