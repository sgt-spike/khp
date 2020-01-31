<?php
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_events);
   require $khp_header;
   include $khp_connection;

   // $events_photos = "SELECT * FROM event_photos WHERE event_id = {$row['event_id']}";
   // $photos = mysqli_query($dbc, $events_photos);
   // $photo = mysqli_fetch_array($photos);

   if (isset($_GET['event'])) {
      
      // $results = mysqli_query($dbc, $events);
      // $row = mysqli_fetch_array($results);
      if ($_GET['event'] == 'All') {
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
               <div class="desktop">
                  <div id="6b304c70-1565-42db-85e2-fe70aafa8d7c">
                     <script type="text/javascript" src="https://default.salsalabs.org/api/widget/template/fffbeae6-b68b-4959-9026-1d93f582f8cb/?tId=6b304c70-1565-42db-85e2-fe70aafa8d7c" ></script>
                  </div>
               </div>
               <div class="mobile">
                  <a href="https://katieshandprint.salsalabs.org/23onthe23rd" target="_blank" style="background:rgb(79, 239, 78);padding:10px;margin:10px 0px;text-align:center;text-decoration:none;font-size:12pt;color:#222222;font-family:Arial, Helvetica, sans-serif;display:inline-block;">Donate $23 on the 23rd!</a>
               </div>
            </div>
            <div class="event past-events">
               <header class="event-h2">
                  <h2>Past Events</h2>
               </header>
               <div>';
         $events = 'SELECT DISTINCT event_id, event_name FROM events_all ORDER BY event_id DESC';
         if ($results = mysqli_query($dbc, $events)) {
            while($row = mysqli_fetch_array($results)) {
               echo "<a class=\"event-link\" href=\"events.php?event=past_event&id={$row['event_id']}\">{$row['event_name']}</a><hr>";
            }
            echo '</div></div></section>';
         }

      } elseif ($_GET['event'] == 'past_event') {
         $events = 'SELECT * FROM events_all WHERE event_id = ' . $_GET['id'];
         if ($results = mysqli_query($dbc, $events)) {
            $event = mysqli_fetch_row($results);
            //print_r($event);
            echo "<section class=\"content-header\">
            <header>
            <div class=\"div-arrow\">
               <a id=\"arrow\" href=\"events.php?event=All\">
                  <i class=\"fas fa-arrow-circle-left\">  All Events</i>
               </a>
            </div>
         </header>
                  </section>
                  <section class=\"content event-photos\">
                     <header>
                        <h1 class=\"main-h1\">{$event[1]}</h1>
                     </header>
                     <div class=\"photos\">";
                     
            while($row = mysqli_fetch_array($results)){
            
               echo "<div class=\"{$row[photo_size]}\"><img src=\"{$row['event_photo']}\" alt=\"Past Event Photo\"></div>";
            }
            echo '</div></section>';
            //    if ($photos = mysqli_query($dbc, $events_photos)) {
            //       echo '<div>';
            //       while ($photo = mysqli_fetch_array($photos)) {
            //          echo "<div><img src=\"{$photo['event_photo']}\" alt=\"Past Event Photo\"></div>";
            //       }
            //       
            //    } 
            //    echo '</div>'; 

            
         } else {
            echo '<p class="error">Something went wrong</p>';
         }
      }
   }
   

   // if ($results = mysqli_query($dbc, $events)) {
   //    while($row = mysqli_fetch_array($results)) {
   //       echo "<div class=\"event past-event\">
   //       <header class=\"event-h2\">
   //          <h2>{$row['event_name']}</h2>
   //       </header>";
   //       $events_photos = "SELECT * FROM event_photos WHERE event_id = {$row['event_id']}";
   //       if ($photos = mysqli_query($dbc, $events_photos)) {
   //          echo '<div>';
   //          while ($photo = mysqli_fetch_array($photos)) {
   //             echo "<img src=\"{$photo['event_photo']}\" alt=\"Past Event Photo\">";
   //          }
   //          echo '</div>';
   //       } 
   //       echo '</div>'; 
   //    }
   // }
   // echo '</ul></section>';

   require $khp_footer;
?>