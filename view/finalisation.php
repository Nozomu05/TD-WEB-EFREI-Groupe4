

<h1>mon panier<h1>
    
<?php foreach($produits as $produit){
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
}
?>

