<?php // Script 13.1 - connection.php
   /* This script handles the connection to the database */
   $host = '10.20.30.10';
   $user = 'khp_user';
   $pass = 'K6DBSJ4m596UJ04m';
   $data = 'khp';

   $dbc = mysqli_connect($host, $user, $pass, $data);
   mysqli_set_charset($dbc, 'utf8');
?>