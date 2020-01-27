<?php // 
   /*  */
   ob_start();
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_admin_login);
   require $khp_header;
   include $khp_connection;

   date_default_timezone_set('UTC');

   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   

   $loggedin = false;
   $error = false;
   $pw_expired = false;
   $url = 'https://dev.spikedevelopments.com/khp/index.php';

   echo '<section class="content-header">
            <header>
               <h1 class="main-h1">Admin Login</h1>
            </header>
         </section>
         <section class="content form-content">
            <div class="khp-form login">';

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
      if ( !empty($_POST['username'] && !empty($_POST['password']))) {

         $username = htmlentities($_POST['username']);
         $password = htmlentities($_POST['password']);

         $query = "SELECT * FROM users where username = '$username'";

         if ($result = mysqli_query($dbc, $query)) {
            $row = mysqli_fetch_array($result);

            $upd_pw_url = "https://dev.spikedevelopments.com/khp/update_password.php?email={$username}";

            if ( ($row['username'] == $username) && ($password == $row['password']) ) {

               if ( $row['pw_expiration'] < date("Y-m-d H:i:s",time()) ) {
                   $pw_expired = 'Your Password has expired!';
               } else {
                  echo '<p>You are logged in!</p>';
                  // $loggedin = true;
                  // session_start();
                  // $_SESSION['name'] = $row['first_name'] . chr(32) . $row['last_name'];
                  // $_SESSION['usertype'] = $row['user_type'];
                  // $_SESSION['loggedin'] = true;
               }

            } else {

               $error = 'The email and password combination does not match!  Please Try Again.';

            }
         } elseif (!$result = mysqli_query($dbc, $query)) {
            //if no records are returned send error message
            $error = 'The submitted email and password do not match those on file!  Try again or register for access';
         }

      } else {
         $error = 'Please make sure you enter both an email and a password!';
      }
   } 

   if ($error) {
       
      echo "<div class=\"form-errors\"><p class=\"error\">{$error}</p></div>";
   }

   if ($loggedin) {
      echo "<p>Your log in is complete.</p>";
      header("refresh:2;url={$url}");
   } elseif ($pw_expired) {
      echo '<div class="form-errors"><p class="error">Password Update Error: ' . $pw_expired . '</p></div>';
      header("refresh:2;url={$upd_pw_url}");
      exit;
   } else {
      echo '<form action="login.php" method="post">
      <div class="form-group">
         <label for="username">User Name</label>
         <input type="text" name="username" id="username" class="form-control  form-control-lg">
      </div>
      <div class="form-group">
         <label for="password">Password</label>
         <input type="password" name="password" id="password" class="form-control  form-control-lg">
      </div>
      <div class="form-group">
         <button type="submit" name="submit" value="Login" class="btn btn-lg">Login</button>
      </div>';
   }
   echo '</form></div></section>';
   include $khp_footer;
   ob_end_flush();
?>
