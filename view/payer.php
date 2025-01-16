<h1>mon panier<h1>
 
<?php 
    $prix = 0;
    foreach($produits as $produit){
        $prix += $produit['prix']*$produit['quantite'];
        ?> 
            <?= $produit['nom']?><br><?= $produit['prix']?>€
        <?php
    }
?>

Prix total: <?=$prix?>€ <br>

<a href="?page=merci">
    <button>Payer</button>
</a>