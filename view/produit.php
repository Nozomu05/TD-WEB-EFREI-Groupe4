
<div id="product-detail">
    <div id="product-detail-left">
      <img src="<?=$produit['photo']?>" alt="montre">
    </div>
    <div id="product-detail-right">
      <div id="product-detail-right-top">
        <h1 class="element-left"><?= $produit['nom']?></h1>
        <p id="product-detail-right-top-price" class="element-left"><?=$produit['prix'] ?>€</p>
      </div>
      <p class="element-left"><?=$produit['description']?></p>
      <p class="element-left"><?=$produit['type']?> | <?=$produit["etat"]?> | <?=$produit['marque']?></p>
      <?php
    
            if(!$estajouter && array_key_exists("id_user",$_SESSION) && $_SESSION['id_user']===$produit['id_proprio']){
              ?>
                <form action="" method="post">
                  <input class="btn-primary" type="submit" name="ajout" value="Supprimer">
                </form>
              <?php
            }else{
              ?>
                <form action="" method="post">
                  <input class="btn-primary" type="submit" name="ajout" value="Ajouter au panier">
                </form>
              <?php
              
            }
        ?>
    </div>
</div>
