<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="description" content="Supporting Alaskan families impacted by childhood cancer">
   <meta name="keywords" content="katieshandprint.org,Katie's Handprint,Childhood Cancer,Alaska,Helping Families,Non-profit">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/png" sizes="16x16" href="img/FC+KH-01.png">
   <link rel="apple-touch-icon" sizes="57x57" href="img/FC+KH-01.png">
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <title><?php if(defined('TITLE')){ echo TITLE;} else { "Katie's Handprint";} ?></title>
</head>
<body>
   <div class="wrapper" id="wrapper">
      <nav class="mobile" id="sidebar">
         <ul id="nav-sidebar" class="nav-sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
            <li class="nav-sidebar-item" >
               <a class="nav-sidebar-item-a" href="<?php echo $khp_index ?>" id="sidebar-home" onclick="setActiveLink()">Home</a>
            </li>
            <li class="nav-sidebar-item" >
               <a class="nav-sidebar-item-a" href="<?php echo $khp_families ?>" id="sidebar-stories">Family Stories</a>
            </li>
            <li class="nav-sidebar-item" >
               <a class="nav-sidebar-item-a" href="events.php?event=All" id="sidebar-events">Events</a>
            </li>
            <li class="nav-sidebar-item with-sub">
               <a class="nav-sidebar-item-a" href="<?php echo $khp_whoweare ?>" id="sidebar-us">Who We Are</a>
            </li>
            <li class="nav-sidebar-item" >
               <a class="nav-sidebar-item-a" href="<?php echo $khp_sponsors ?>"  id="sidebar-sponsors">Sponsors</a>
            </li>
            <li class="nav-sidebar-item" >
               <a class="nav-sidebar-item-a" href="<?php echo $khp_donate ?>"  id="sidebar-donate">Donate</a>
            </li>
            <li class="nav-sidebar-item">
               <div id="sidebar-sub-div">
                  <a class="nav-sidebar-item-a" href="<?php echo $khp_contact ?>" id="sidebar-contact">Contact</a>
               </div>
            </li>
            <li class="nav-sidebar-item">
               <div id="sidebar-sub-div">
                  <a href="https://katieshandprint.salsalabs.org/23onthe23rd" target="_blank" style="background:rgb(79, 239, 78);padding:10px;margin:10px 0px;text-align:center;text-decoration:none;font-size:12pt;color:#222222;font-family:Arial, Helvetica, sans-serif;display:inline-block;">Donate Now!</a>
               </div>
            </li>
         </ul>
      </nav>
      <section class="header">
         <header class="logo">
            <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>
            <img id="logo" src="img/Web+Logo-01.png" alt="Katie's Handprint">
         </header>
         <nav class="main-nav">
            <ul class="nav-ul">
               <li class="nav-item" >
                     <a class="nav-item-a" href="<?php echo $khp_index ?>" id="home" onclick="setActiveLink()">Home</a>
                  </li>
                  <span class="divide">|</span>
                  <li class="nav-item" >
                     <a class="nav-item-a" href="<?php echo $khp_families ?>" id="stories" onclick="setActiveLink()">Family Stories</a>
                  </li>
                  <span class="divide">|</span>
                  <li class="nav-item" >
                     <a class="nav-item-a" href="<?php echo $khp_events ?>" id="events" onclick="setActiveLink()">Events</a>
                  </li>
                  <span class="divide">|</span>
                  <li class="nav-item">
                     <a class="nav-item-a" href="<?php echo $khp_whoweare ?>" id="us" onclick="setActiveLink()">Who We Are</a>
                     
                  </li>
                  <span class="divide">|</span>
                  <li class="nav-item" >
                     <a class="nav-item-a" href="<?php echo $khp_sponsors ?>"  id="sponsors" onclick="setActiveLink()">Sponsors</a>
                     
                  </li>
                  <span class="divide">|</span>
                  <li class="nav-item" >
                     <a class="nav-item-a" href="<?php echo $khp_donate ?>"  id="donate" onclick="setActiveLink()">Donate</a>
                  </li>
                  <li class="nav-item">
                     <div id="sub-div">
                        <a class="nav-item-a" href="<?php echo $khp_contact ?>" id="contact" onclick="setActiveLink()">Contact</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <div id="sub-div">
                        <a href="https://katieshandprint.salsalabs.org/23onthe23rd" target="_blank" style="background:rgb(79, 239, 78);padding:10px;margin:10px 0px;text-align:center;text-decoration:none;font-size:12pt;color:#222222;font-family:Arial, Helvetica, sans-serif;display:inline-block;">Donate Now!</a>
                     </div>
                  </li>
            </ul>
         </nav>
      </section>
      <main class="main-content">
