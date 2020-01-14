<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="description" content="Supporting Alaskan families impacted by childhood cancer">
   <meta name="keywords" content="katieshandprint.org,Katie's Handprint,Childhood Cancer,Alaska,Helping Families,Non-profit">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/mobile.css">
   <link rel="icon" type="image/png" sizes="16x16" href="img/FC+KH-01.png">
   <link rel="apple-touch-icon" sizes="57x57" href="img/FC+KH-01.png">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <!-- need to show handprint icon on tab -->
   <title><?php if(defined('TITLE')){ echo TITLE;} else { "Katie's Handprint";} ?></title>
</head>
<body>
   <nav id="sidebar" class="sidebar">
      <ul id="nav-sidebar" class="nav-sidebar">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
         <li class="nav-sidebar-item" >
            <a class="nav-sidebar-item-a" href="index.php" id="sidebar-home" onclick="setActiveLink()">Home</a>
         </li>
         <li class="nav-sidebar-item" >
            <a class="nav-sidebar-item-a" href="familystories.php?page=Gallery" id="sidebar-stories">Family Stories</a>
         </li>
         <li class="nav-sidebar-item" >
            <a class="nav-sidebar-item-a" href="ridewithus.php" id="sidebar-events">Events</a>
         </li>
         <li class="nav-sidebar-item with-sub">
            <a class="nav-sidebar-item-a" href="whoweare.php?page=Board" id="sidebar-us">Who We Are</a>
         </li>
         <li class="nav-sidebar-item" >
            <a class="nav-sidebar-item-a" href="sponsors.php"  id="sidebar-sponsors">Sponsors</a>
         </li>
         <li class="nav-sidebar-item" >
            <a class="nav-sidebar-item-a" href="donate.php"  id="sidebar-donate">Donate</a>
         </li>
         <li class="nav-sidebar-item">
            <div id="sidebar-sub-div">
               <a class="nav-sidebar-item-a" href="contact.php" id="sidebar-contact">Contact</a>
            </div>
         </li>
      </ul>
   </nav>
   <header id="header">
      <div class="hcontainer">
         <img id="logo" src="img/Web+Logo-01.png" alt="Katie's Handprint">
         <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>
         <ul id="nav" class="nav">
            <li class="nav-item" >
               <a class="nav-item-a" href="index.php" id="home" onclick="setActiveLink()">Home</a>
               <span class="divide">|</span>
            </li>
            <li class="nav-item" >
               <a class="nav-item-a" href="familystories.php?page=Gallery" id="stories" onclick="setActiveLink()">Family Stories</a>
               <span class="divide">|</span>
            </li>
            <li class="nav-item" >
               <a class="nav-item-a" href="ridewithus.php" id="events" onclick="setActiveLink()">Events</a>
               <span class="divide">|</span>
            </li>
            <li class="nav-item">
               <a class="nav-item-a" href="whoweare.php?page=Board" id="us" onclick="setActiveLink()">Who We Are</a>
               <span class="divide">|</span>
            </li>
            <li class="nav-item" >
               <a class="nav-item-a" href="sponsors.php"  id="sponsors" onclick="setActiveLink()">Sponsors</a>
               <span class="divide">|</span>
            </li>
            <li class="nav-item" >
               <a class="nav-item-a" href="donate.php"  id="donate" onclick="setActiveLink()">Donate</a>
            </li>
            <li class="nav-item">
               <div id="sub-div">
                  <a class="nav-item-a" href="contact.php" id="contact" onclick="setActiveLink()">Contact</a>
               </div>
            </li>
         </ul>
      </div>
   </header>
   <script src="js/links.js"></script>
   