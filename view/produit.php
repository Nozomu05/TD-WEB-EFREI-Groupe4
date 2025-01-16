<!--<h1><?/*= $produit['nom']?></h1>

prix: <?=$produit['prix'] ?>, 
quantite disponible: <?=$produit["quantite"]?> <br>
type: <br><?=$produit['type']?> <br>
Description:<br><?=$produit['description']?> <br>

<?php
    if($produit['quantite'] === 0){
        echo "produit en rupture de stock";
    }else{
        ?>
            <form action="" method="post">
                <input type="number" name="quantity" min="1" max="<?=$produit['quantite'] ?>" required>
                <button>Ajouter au panier</button>
            </form>
        <?php
    }*/
?>

-->

<div id="product-detail">
    <div id="product-detail-left">
      <img src="../img/product-detail-image.webp" alt="montre">
    </div>
    <div id="product-detail-right">
      <div id="product-detail-right-top">
        <h1 class="element-left">Nom de la montre</h1>
        <p id="product-detail-right-top-price" class="element-left">36 000€</p>
      </div>
      <p class="element-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
      <p class="element-left">Mécanique | Argent | 1976</p>
      <a class="btn-primary" href="?page=produits">Ajouter au panier</a>
    </div>
  </div>