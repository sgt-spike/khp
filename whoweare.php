<?php // 
   /*  */
   include 'php/khp_variables.php';
   define('TITLE', $khp . 'Who We Are');
   require 'php/header.php';
   include 'php/connection.php';
   echo '<main class="container-main">';

   if (isset($_GET['page'])) {

      if ($_GET['page'] == 'Board') {
      
         $query = 'SELECT * FROM board ORDER BY board_member_id ASC';

         if ($result = mysqli_query($dbc, $query)) {
         
            echo '<h1 id="board-h1" class="main-h1">The Board</h1><div id="board">';

            while ($row = mysqli_fetch_array($result)) {
               echo "<a href=\"whoweare.php?page=BoardMember&id={$row['board_member_id']}&name={$row['name']}\"><div class=\"gallery\"><div class=\"desc top\">{$row['position']}</div><img src=\"{$row['thumbnail']}\" alt=\"{$row['position']}\" class=\"allImg\"><div class=\"desc bottom\">{$row['name']}</div></div></a>";
            }
         } else {
            echo '<p class="error">Could not retrieve results because: ' . mysqli_error($dbc) . '</p>';
         }
   
      } elseif ($_GET['page'] == 'BoardMember') {

         $query = 'SELECT * FROM board WHERE board_member_id = ' . $_GET['id']; 

         if ($result = mysqli_query($dbc, $query)) {
            echo '<div class="div-arrow"><a id="arrow" href="whoweare.php?page=Board" target="_self"><i class="fas fa-angle-double-left">THE BOARD</i></a></div><div class="container-art">';
         
            while ($row = mysqli_fetch_array($result)) {
               echo "<div class=\"div-img\"><img src=\"{$row['thumbnail']}\" class=\"whoweare-img\" alt=\"{$row['position']}\"></div><div class=\"div-art\"><h2 class=\"whoweare-h2\">{$row['name']} - {$row['position']}</h2><article class=\"whoweare-art\">{$row['bio']}<br><br>Should you have any questions, ideas, comments, concerns, or want to volunteer, please contact me at ";
               if ($row['phone'] != "") {
                  echo "Phone: {$row['phone']} or Email: <a href=\"mailto:{$row['email']}\">{$row['email']}</a>";
               } else {
                  echo "Email: <a href=\"mailto:{$row['email']}\">{$row['email']}</a>";
               }
            }
         }
         echo '</article></div></div></main>';
   
         }
         mysqli_close($dbc);
      } 

   include 'php/footer.php'; 
?>