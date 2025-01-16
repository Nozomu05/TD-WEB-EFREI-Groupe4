
<div id="features-products">
  <div id="basket-products-top">
      <div id="basket-products-top-left">
        <h1 class="element-left">Votre panier</h1>
        <p class="element-left">Félicitations ! Vous avez choisi de magnifiques montres.</p>
      </div>
      <?php
            if($pasvide){
            ?>
               <a class="btn-primary" href="?page=checkout">Payer</a>
            <?php
        }
      ?>
  </div>
  <div id="features-products-container">
  <?php foreach($produits as $produit){
        ?> 
            <a href="?page=produit&id=<?=$produit['id_produit']?>" id="features-products-container-item">
                <div id="features-products-container-item-img">
                <img src="img/features-products-bottom2.webp" alt="features-products-bottom">
                </div>
                <div id="features-products-container-item-text">
                <div id="features-products-container-item-text-top">
                    <p class="medium-weight-text"><?= $produit['nom']?></p>
                    <p class="small-text"><?= $produit['type']?></p>
                </div>
                <div id="features-products-container-item-text-bottom">
                    <p><?= $produit['prix']?>€</p>
                </div>
                </div>
                <form action="" method="post">
                    <input name="<?=$produit['id_produit']?>" class="btn-primary" type="submit" value="Supprimer">
                </form>
            </a>
        <?php
    }?>
 </div>
</div>