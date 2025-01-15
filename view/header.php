<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma page</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="?page=accueil">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <?php
          if(isset($_GET["page"]) && ($_GET["page"] == "utilisateur" || $_GET["page"]=="message" || $_GET["page"]== "mesproduits" || $_GET["page"]=="ajouter")) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="?page=utilisateur">Information utilisateur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=message">Mes Messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=mesproduits">Mes Produits</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="?page=ajouter">Vendre un produit</a>
              </li class="nav-item">
            <?php
          }else{
            ?>
              <li class="nav-item">
                <a class="nav-link" href="?page=quotidien">Quotidien</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=technologie">Technologie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=sport">Sport</a>
              </li>
            <?php
           
            if(!isset($_SESSION['nom'])) {  
              ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inscription">Inscription</a>
                </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="?page=connexion">Connexion</a>
                </li>
              <?php 
            } else { 
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="?page=utilisateur"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="?page=panier">Mon Panier</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="?page=deconnexion">Deconnexion</a>
                </li>
              <?php
            } 
            if(isset($_GET['page']) and $_GET['page'] ==="checkout"){
              ?>
                <li>
                  <a class="nav-link" href="?page=panier">Retour</a>
                </li>
              
              <?php
            }
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

