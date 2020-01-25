<?php // 
   /*  */
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_admin_pw_update);
   require $khp_header;
   include $khp_connection;

   echo '<section class="content-header"><header><h1 class="main-h1">Update Password</h1></header></section><section class="content form-content"><div class="khp-form update-pw"><p class="error">Please update your password!</p></div></section>';

   include $khp_footer;
?>