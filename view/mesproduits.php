<h1>Mes Produits</h1>
<?php foreach($mesproduits as $produit){
    ?> 
        <a href="?page=produit&id=<?=$produit['id_produit']?>">
            <button>
                <?= $produit['nom']?><br><?= $produit['prix']?>
            </button>
        </a>
    <?php
}?>