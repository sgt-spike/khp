<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . 'Family Stories');
   require 'php/header.php';
   include 'php/stories_markup.php';
   
?>

   <main class="container-main">
      <?php echo $markup; ?>
   </main>
   <script src="js/setId.js"></script>
   <script src="js/slideshow.js"></script>
<?php
   require 'php/footer.php';
?>