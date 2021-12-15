<?php require("functions/db.php");?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ski Servis Pahuljica</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
      <link rel="stylesheet" href="css/styles.css?<?php echo time(); ?>">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <script src="js/jquery-3.6.0.min.js"></script>
   </head>
   <body>

      <nav class="navbar stuck sticky-top fixed-top navbar-expand-lg navbar-dark scrolling-navbar navbar-static-top" id="navbar">
        <div class="container">
          <a href="./" class="navbar-brand"><img src="images/logo3.png" alt="" class="d-inline-block align-middle mr-2"></a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" id="toggleNavBtn">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="./" class="nav-link">Pocetna</a>
              </li>
              <li class="nav-item">
                <a href="o-nama.php" class="nav-link">O nama</a>
              </li>
              <li class="nav-item">
                <a href="usluge.php" class="nav-link">Usluge</a>
              </li>
              <li class="nav-item">
                <a href="galerija.php" class="nav-link">Galerija</a>
              </li>
              <li class="nav-item">
                <a href="kontakt.php" class="nav-link">Kontakt</a>
              </li>
              <?php
                if(isset($_COOKIE['user'])) {
              ?>
              <li class="nav-item">
                <a href="dodaj-proizvod.php" class="nav-link">Dodaj proizvod</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Izloguj se</a>
              </li>
              <?php }else{ ?>
              <li class="nav-item">
                <a href="login.php" class="nav-link">Uloguj se</a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
