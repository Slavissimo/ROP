<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$db = "ticket_system"; 

$conn = new mysqli("localhost", "root", "", "ticket_system");

if($conn ->connect_error) {
   die("Connection error, try again!");
}?>
<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" href="css.css">
        <script src="https://kit.fontawesome.com/7a7a8f8bce.js" crossorigin="anonymous"></script>
        <link rel="icon" href="https://cdn.discordapp.com/attachments/670709218340241408/969608874011262976/logo_spse.png" type="image/icon type">
        <meta charset="UTF-8">
        <meta name="author" content="Slavomír Salončuk">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="SPŠE, ticket systém">
        <title>Ticketový systém</title>
  </head>
  <body class="kontainer">
    <div class="nav-bar">
      <div class="odkazy">
        <a class="odkaz" href="index.php"><i class="fa-solid fa-house"></i>Domov</a>
        <a class="odkaz" href="reports.php"><i class="fa-solid fa-list-ul"></i>Moje nahlásenia</a>
        <a class="odkaz" href="reportform.php"><i class="fa-solid fa-pen"></i>Nové nahlásenie</a>
      </div>
    </div>
    <div class="main-content">
        <h1>ajkhasdjkldas</h1>
    </div>
  </body>
</html>