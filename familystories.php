<?php // stories_markup.php
   /* Pulls and Displays all family stories */
   require 'php/khp_variables.php';
   //require $khp_variables;
   define('TITLE', $khp . $khp_title_families);
   require $khp_header;
   require $khp_connection;

   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   

   if (isset($_GET['page'])) {
      if ($_GET['page'] == 'Gallery') {
         
         $query = 'SELECT story_id, name, thumbnail, splash FROM stories_online ORDER BY story_id ASC';

         echo '<section class="content-header"><header><h1 class="main-h1">Stories of our Amazing People</h1></header></section><section id="content" class="content families">
         <ul class="stories-ul">';

         if ($result = mysqli_query($dbc, $query)) {
            
            while ($row = mysqli_fetch_array($result)) {
               echo "<li class=\"gallery story\"><a href=\"familystories.php?page=Story&id={$row['story_id']}&story={$row['name']}\"><img src=\"{$row['thumbnail']}\" alt=\"{$row['name']}\" class=\"img-main khp-img\"><div class=\"desc\"><h2>{$row['name']}</h2><p>{$row['splash']}</p></div></a></li>";
            }
         } else {
            echo '<p class="error">Could not retrieve the data because: ' . mysqli_error($dbc) . '</p>';
         }
         echo '</ul></section>';
      } elseif ($_GET['page'] == 'Story') {

         $query_story = "SELECT story_id, name, story FROM stories_online WHERE story_id = {$_GET['id']}";
         $query_photos = "SELECT * FROM photos WHERE story_id = {$_GET['id']}";

         echo '<section class="content-header">
                  <header>
                     <div class="div-arrow">
                        <a id="arrow" href="familystories.php?page=Gallery">
                           <i class="fas fa-arrow-circle-left">  THE FAMILIES</i>
                        </a>
                     </div>
                  </header>
               </section>
               <section class="content individual"><div class="slideshow-container">';
         if (($story = mysqli_query($dbc, $query_story)) && ($photos = mysqli_query($dbc, $query_photos))) {
            
            while ($row = mysqli_fetch_array($photos)) {
               echo "<div class=\"mySlides\"><img src=\"{$row['photo_link']}\" style=\"width:100%;\" class=\"khp-img\"></div>";
            }

            echo "<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a><a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a></div><div class=\"dot-group\">";
            
            $row_num = mysqli_num_rows($photos);
            for ($i=1; $i <= $row_num; $i++) { 
               echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
            }
            
            $row = mysqli_fetch_array($story);
            echo "</div><div class=\"story-h1\"><h1>{$row['name']}</h1></div>
            <div class=\"story-article\">
               <article>" . $row['story'] . "</article>";
         } else {
            echo '<p class="error">Could not retrieve the data because: ' . mysqli_error($dbc) . '</p>';
         }
         echo '<script src="js/slideshow.js"></script>';
      }
      mysqli_close($dbc);
      echo '</section>';
   }

   include $khp_footer;

?>