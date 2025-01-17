<div id="features-products">
  <div id="features-products-top">
    <h1>Vos montres en vente</h1>
  </div>
  <div id="features-products-container">
  <?php foreach($mesproduits as $produit){
    ?> 
        <a href="?page=produit&id=<?=$produit['id_produit']?>">
            <button>
                <?= $produit['nom']?><br><?= $produit['prix']?>€
            </button>
        </a>
        <a href="?page=produit&id=<?=$produit['id_produit']?>" id="features-products-container-item">
            <div id="features-products-container-item-img">
            <img src="../img/features-products-bottom1.webp" alt="features-products-bottom">
            </div>
            <div id="features-products-container-item-text">
            <div id="features-products-container-item-text-top">
                <p class="medium-weight-text"><?= $produit['nom']?>€</p>
                <p class="small-text"><?= $produit['type']?></p>
            </div>
            <div id="features-products-container-item-text-bottom">
                <p><?= $produit['prix']?>€</p>
            </div>
            </div>
        </a>
    <?php
 }?>

</div>

<a class="btn-primary" href="?page=ajouter">Ajouter un produit</a>

</div> 
