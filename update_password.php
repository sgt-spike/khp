<?php // 
   /*  */
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_admin_pw_update);
   require $khp_header;
   include $khp_connection;

   echo '<section class="content-header">
            <header>
               <h1 class="main-h1">Update Password</h1>
            </header>
         </section>
         <section class="content form-content">
            <div class="khp-form update-pw">
               <header class="form-heading">
                  <h2>Please update your password!</h2>
               </header>';
   if (isset($_GET['email'])) {
      $email = htmlentities($_GET['email']);
      $error = false;
      $updated = false;

      $user = 'SELECT user_id username password FROM users WHERE username = "' . $email . '"';
      if ($results = mysqli_query($dbc, $user)) {

         $row = mysqli_fetch_array($results);

         //show form
         echo "<form action=\"\" method=\"post\">
                  <div class=\"form-group\">
                     <label for=\"username\">User Name</label>
                     <input type=\"text\" name=\"username\" value=\"{$row['username']}\" class=\"form-control form-control-lg\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"curr_pw\">Current Password</label>
                     <input type=\"password\" name=\"curr_pw\" class=\"form-control form-control-lg\">
                     <input type=\"hidden\" value=\"{$row['password']}\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"upd_pw\">Confirm Password</label>
                     <input type=\"password\" name=\"upd_pw\" class=\"form-control form-control-lg\">
                  </div>
               </form>";
      } else {
         echo '<p class="error">This email does not match our records.  Please contact Darlis Meyer or Brad Chriss</p>';
      }


      
   }

   echo '</div></section>';
   include $khp_footer;
?>