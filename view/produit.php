<h1><?= $produit['nom']?></h1>

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
    }
?>