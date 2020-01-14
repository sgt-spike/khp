<?php // stories_markup.php
   /* Pulls and Displays all family stories */
   include 'php/khp_variables.php';
   define('TITLE', $khp . 'Family Stories');
   require 'php/header.php';
   include 'php/connection.php';
   echo '<main class="container-main">';
   if (isset($_GET['page'])) {
      if ($_GET['page'] == 'Gallery') {
         
         $query = 'SELECT story_id, name, thumbnail, splash FROM stories_online ORDER BY story_id ASC';

         echo '<h1 id="stories-h1" class="main-h1">Stories of our Amazing People</h1>
         <ul id="stories-ul" class="stories-ul">';

         if ($result = mysqli_query($dbc, $query)) {
            
            while ($row = mysqli_fetch_array($result)) {
               echo "<a href=\"familystories.php?page=Story&id={$row['story_id']}&story={$row['name']}\"><li class=\"gallery story\"><img src=\"{$row['thumbnail']}\" alt=\"{$row['name']}\" class=\"img-main\"><div class=\"desc\"><h2>{$row['name']}</h2><p>{$row['splash']}</p></div></li></a>";
            }
         } else {
            echo '<p class="error">Could not retrieve the data because: ' . mysqli_error($dbc) . '</p>';
         }
         
      } elseif ($_GET['page'] == 'Story') {

         $query_story = "SELECT story_id, name, story FROM stories_online WHERE story_id = {$_GET['id']}";
         $query_photos = "SELECT * FROM photos WHERE story_id = {$_GET['id']}";

         echo '<div class="div-arrow"><a id="arrow" href="familystories.php?page=Gallery"><i class="fas fa-angle-double-left">THE FAMILIES</i></a></div><div class="slideshow-container">';
         if (($story = mysqli_query($dbc, $query_story)) && ($photos = mysqli_query($dbc, $query_photos))) {
            
            while ($row = mysqli_fetch_array($photos)) {
               echo "<div class=\"mySlides\"><img src=\"{$row['photo_link']}\" style=\"width:100%;\"></div>";
            }

            echo "<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a><a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a></div><br><div class=\"dot-group\">";
            
            $row_num = mysqli_num_rows($photos);
            for ($i=1; $i <= $row_num; $i++) { 
               echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
            }
            
            $row = mysqli_fetch_array($story);
            echo "</div><br><div class=\"story-h1\"><h1>{$row['name']}</h1></div>
            <div class=\"story-article\">
               <article>" . $row['story'] . "</article>";
         } else {
            echo '<p class="error">Could not retrieve the data because: ' . mysqli_error($dbc) . '</p>';
      } 
      }
      mysqli_close($dbc);
   }
   echo '</main>
   <script src="js/setId.js"></script>
   <script src="js/slideshow.js"></script>';

   include 'php/footer.php';

?>