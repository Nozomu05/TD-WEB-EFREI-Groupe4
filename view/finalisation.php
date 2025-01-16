

<!--<h1>mon panier<h1>
    
<?php/* foreach($produits as $produit){
    ?> 
        <a href="?page=produit&id=<?=$produit['id_produit']?>">
            <button>
                <?= $produit['nom']?><br><?= $produit['prix']?>
                quantite: <?=$produit['quantite']?>
            </button>
        </a>
        <form action="" method="post">
            <input type="number" name=<?=$produit['id_produit']?> min="<?=-$produit['quantite']?>" max="<?=$produit['quantite_max']-$produit['quantite']?>" required>
            <button name="pay">modifier la quantite</button>
        </form>

    <?php
}
if($pasvide){
    ?>
        <a href="?page=checkout">
            <button>Payer</button>
        </a>
    <?php
}*/
?>

-->


<div id="features-products">
  <div id="basket-products-top">
      <div id="basket-products-top-left">
        <h1 class="element-left">Votre panier</h1>
        <p class="element-left">Félicitations ! Vous avez choisi de magnifiques montres.</p>
      </div>
      <a class="btn-primary" href="?page=produits">Tout supprimer</a>
  </div>
  <div id="features-products-container">

  <a href="?page=produits" id="features-products-container-item">
    <div id="features-products-container-item-img">
      <img src="../img/features-products-bottom1.webp" alt="features-products-bottom">
    </div>
    <div id="features-products-container-item-text">
      <div id="features-products-container-item-text-top">
        <p class="medium-weight-text">Montre 1</p>
        <p class="small-text">Quartz</p>
      </div>
      <div id="features-products-container-item-text-bottom">
        <p>15 000€</p>
      </div>
    </div>
    <input class="btn-primary" type="submit" value="Supprimer">
  </a>

  <a href="?page=produits" id="features-products-container-item">
    <div id="features-products-container-item-img">
      <img src="../img/features-products-bottom2.webp" alt="features-products-bottom">
    </div>
    <div id="features-products-container-item-text">
      <div id="features-products-container-item-text-top">
        <p class="medium-weight-text">Montre 2</p>
        <p class="small-text">Mécanique</p>
      </div>
      <div id="features-products-container-item-text-bottom">
        <p>25 000€</p>
      </div>
    </div>
    <input class="btn-primary" type="submit" value="Supprimer">
  </a>

  <a href="?page=produits" id="features-products-container-item">
    <div id="features-products-container-item-img">
      <img src="../img/features-products-bottom3.webp" alt="features-products-bottom">
    </div>
    <div id="features-products-container-item-text">
      <div id="features-products-container-item-text-top">
        <p class="medium-weight-text">Montre 3</p>
        <p class="small-text">Quartz</p>
      </div>
      <div id="features-products-container-item-text-bottom">
        <p>36 000€</p>
      </div>
    </div>
    <input class="btn-primary" type="submit" value="Supprimer">
  </a>

  <a href="?page=produits" id="features-products-container-item">
    <div id="features-products-container-item-img">
      <img src="../img/features-products-bottom4.webp" alt="features-products-bottom">
    </div>
    <div id="features-products-container-item-text">
      <div id="features-products-container-item-text-top">
        <p class="medium-weight-text">Montre 4</p>
        <p class="small-text">Mécanique</p>
      </div>
      <div id="features-products-container-item-text-bottom">
        <p>6 000€</p>
      </div>
    </div>
    <input class="btn-primary" type="submit" value="Supprimer">
  </a>


  </div>

</div>
