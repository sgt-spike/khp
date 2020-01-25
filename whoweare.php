<?php // 
   /*  */
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_whoweare);
   require $khp_header;
   include $khp_connection;

   if (isset($_GET['page'])) {

      if ($_GET['page'] == 'Board') {

         echo '<section class="content-header"><header><h1 class="main-h1">The Board</h1></header></section><section class="content board">';
      
         $exe_board = 'SELECT * FROM board WHERE board_type = 1';
         $gen_board = 'SELECT * FROM board WHERE board_type = 2';
         // executive board
         if ($result = mysqli_query($dbc, $exe_board)) {

            echo '<div class="board-group executive">
                     <header class="board-h2">
                        <h2>The Executive Board</h2>
                     </header>
                     <ul class="board-list">';

            while ($row = mysqli_fetch_array($result)) {

               $url_name_value = str_replace(chr(32),chr(95),$row['name']);

               echo "<li class=\"list-item\"><a href=\"whoweare.php?page=BoardMember&id={$row['board_member_id']}&name={$url_name_value}\"><div class=\"gallery\"><div class=\"desc top\">{$row['position']}</div><div class=\"img\"><img src=\"{$row['thumbnail']}\" alt=\"{$row['name']}\"></div><div class=\"desc bottom\">{$row['name']}</div></div></a></li>";
            }
            echo '</ul>
            </div>';
         } else {
            echo '<p class="error">Could not retrieve results because: ' . mysqli_error($dbc) . '</p>';
         }
         // General Board
         if ($result = mysqli_query($dbc, $gen_board)) {

            echo '<div class="board-group general"><header class="board-h2"><h2>The General Board</h2></header><ul class="board-list">';

            while ($row = mysqli_fetch_array($result)) {

               $url_name_value = str_replace(chr(32),chr(95),$row['name']);

               echo "<li class=\"list-item\"><a href=\"whoweare.php?page=BoardMember&id={$row['board_member_id']}&name={$url_name_value}\"><div class=\"gallery\"><div class=\"desc top\">{$row['position']}</div><div class=\"img\"><img src=\"{$row['thumbnail']}\" alt=\"{$row['name']}\"></div><div class=\"desc bottom\">{$row['name']}</div></div></a></li>";
            }
            echo '</ul></div>';
         } else {
            echo '<p class="error">Could not retrieve results because: ' . mysqli_error($dbc) . '</p>';
         }
         
   
      } elseif ($_GET['page'] == 'BoardMember') {

         $query = 'SELECT * FROM board WHERE board_member_id = ' . $_GET['id']; 

         if ($result = mysqli_query($dbc, $query)) {
            echo '<div class="div-arrow"><a id="arrow" href="whoweare.php?page=Board" target="_self"><i class="fas fa-angle-double-left">THE BOARD</i></a></div><div class="container-art">';
         
            while ($row = mysqli_fetch_array($result)) {
               echo "<div class=\"div-img\"><img src=\"{$row['thumbnail']}\" class=\"khp-img whoweare-img\" alt=\"{$row['position']}\"></div><div class=\"div-art\"><h2 class=\"whoweare-h2\">{$row['name']} - {$row['position']}</h2><article class=\"whoweare-art\">{$row['bio']}<br><br>Should you have any questions, ideas, comments, concerns, or want to volunteer, please contact me at ";
               if ($row['phone'] != "") {
                  echo "Phone: {$row['phone']} or Email: <a href=\"mailto:{$row['email']}\">{$row['email']}</a>";
               } else {
                  echo "Email: <a href=\"mailto:{$row['email']}\">{$row['email']}</a>";
               }
            }
         }
         echo '</article></div></div>';
   
      }

         mysqli_close($dbc);
   } 


   include $khp_footer; 
?>