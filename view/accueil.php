

<h1>Produits<h1>
    
<?php foreach($produits as $produit){
    ?> 
        <a href="?page=produit&id=<?=$produit['id_produit']?>">
            <button>
                <?= $produit['nom']?><br><?= $produit['prix']?>
            </button>
        </a>
    <?php
}?>
