<?php
   $q = $_REQUEST['q'];
   if ($q == 'ride18') {
      $events->makup = '';
   } elseif ($q == 'ride19') {
      $events->makup = '';
   }
   $myJSON = json_encode($events);
   echo $myJSON;
?>