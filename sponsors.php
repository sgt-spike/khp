<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_sponsors);
   require $khp_header;
   include $khp_connection;

   echo '<section class="content-header">
            <header>
               <h1 class="main-h1" id="our-sponsors">Our Wonderful Sponsors</h1>
            </header>
            </section>
            <section id="content" class="content sponsors">
               <div class="img-group">';

   $query = 'SELECT * FROM sponsors';
   $result = mysqli_query($dbc, $query);
   while ($row = mysqli_fetch_array($result)) {
      echo "<img src=\"{$row['img']}\" alt=\"{$row['name']}\">";
   }
   mysqli_close($dbc);
   echo '</div></section>';

   require $khp_footer;

?>