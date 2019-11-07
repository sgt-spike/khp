<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . 'Family Stories');
   require 'header.php';
   include 'php/markup.php'
?>

   <main class="container-main">
      <?php print $markup; ?>
   </main>
   <script src="js/setId.js"></script>
<?php
   require 'footer.php';
?>