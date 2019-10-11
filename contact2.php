<?php
   require 'header.php';
?>
   <script>
      document.querySelector('head').innerHTML += '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
   </script>
   <main class="container">
      <h1 id="contact-h1">Contact Us</h1>
         <div id="contact-form">
            <div id="form-heading">
               <p>Have a question, conment, or concern?</p>
               <p>Leave us a message</p>
            </div>
            <form action="#" method="post" class="form" name="contact-form" target="_self">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">First and last name</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control">
                  <input type="text" aria-label="Last name" class="form-control">
               </div>  
            </form>   
         </div>
   </main>

<?php
   require 'footer.php';
?>