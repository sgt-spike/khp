<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_events);
   require $khp_header;
   include $khp_connection;

   $events = 'SELECT * FROM events ORDER BY event_id DESC';

   echo '<section class="content-header">
            <header>
               <h1 class="main-h1">Events</h1>
            </header>
         </section>
         <section class="content events"> 
            <div class="event current-event">
               <header class="event-h2">
                  <h2>Current Event</h2>
               </header>
               <div id="6b304c70-1565-42db-85e2-fe70aafa8d7c">
                  <script type="text/javascript" src="https://default.salsalabs.org/api/widget/template/fffbeae6-b68b-4959-9026-1d93f582f8cb/?tId=6b304c70-1565-42db-85e2-fe70aafa8d7c" ></script>
               </div>
            </div>';

   if ($results = mysqli_query($dbc, $events)) {
      while($row = mysqli_fetch_array($results)) {
         echo "<div class=\"event past-event\">
         <header class=\"event-h2\">
            <h2>{$row['event_name']}</h2>
         </header>";
         $events_photos = "SELECT * FROM event_photos WHERE event_id = {$row['event_id']}";
         if ($photos = mysqli_query($dbc, $events_photos)) {
            echo '<div>';
            while ($photo = mysqli_fetch_array($photos)) {
               echo "<img src=\"{$photo['event_photo']}\" alt=\"Past Event Photo\">";
            }
            echo '</div>';
         } 
         echo '</div>'; 
      }
   }
   echo '</section>';

   require $khp_footer;
?>