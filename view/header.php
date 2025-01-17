<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeTreasure</title>
    <link rel="stylesheet" href="styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <script src="script/script.js"></script>

</head>
<body>

  <nav id="navbar">
    <div id="nav-item-left">
      <a href="?page=accueil">Montres</a>
      <a href="?page=quartz">Quartz</a>
      <a href="?page=mecanique">Mécaniques</a>
    </div>

    <div id="logo-navbar-container">
      <a href="?page=accueil"><img src="../img/logo.svg" alt="logo"></a>
    </div>
    <div id="nav-item-right">
      <?php
        if(sizeof($_SESSION)===0){
          ?>
            <a href="?page=connexion"><img src="../img/profil.svg" alt="profil"></a>
          <?php
        }else{
          ?>
            <a href="?page=utilisateur"><img src="../img/profil.svg" alt="profil"></a>
          <?php
        }
      ?>
      <a href="?page=panier"><img src="../img/panier.svg" alt="panier"></a>
    </div>
  </nav>


