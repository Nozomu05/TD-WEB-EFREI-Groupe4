
<div id="hero-section">

<div id="hero-section-top">
  <div id="hero-section-small-top">
    <h1>L'art de l'horlogerie,<br>redéfinie en seconde main</h1>
    <p id="hero-section-small-top-p">Découvrez des montres rares et intemporelles, parfaites pour les passionnés exigeants qui cherchent à allier luxe et authenticité.</p>
  </div>
    <a class="btn-primary" href="?page=toutlesproduits">Trouvez votre montre d'exception</a>
</div>

<div id="hero-section-bottom">
    <img src="model/img/hero-section-bottom.webp" alt="hero-section-bottom">
</div>

</div>

<div id="features-products">
<div id="features-products-top">
<h2>Nouveautés,<br>Montres rares et inédites</h2>
<p>Soyez les premiers à découvrir nos dernières pièces mises en vente.</p>
</div>
<div id="features-products-container">
<?php
  foreach($produits as $produit){
    ?>
      <a href="?page=produit&id=<?=$produit['id_produit']?>" id="features-products-container-item">
        <div id="features-products-container-item-img">
          <img src="<?=$produit['photo'] ?>" alt="features-products-bottom">
        </div>
        <div id="features-products-container-item-text">
          <div id="features-products-container-item-text-top">
            <p class="medium-weight-text"><?=$produit['nom'] ?></p>
            <p class="small-text"><?=$produit['type'] ?></p>
          </div>
          <div id="features-products-container-item-text-bottom">
            <p><?=$produit['prix'] ?>€</p>
          </div>
        </div>
      </a>
    <?php
  }

?>

</div>

<a class="btn-primary" href="?page=toutlesproduits">Toutes les montres</a>

</div>

<div id="section-cta-mecanique">
<div id="section-cta-mecanique-left">
<div id="section-cta-mecanique-left-top">
  <h2 class="element-left">L’Horlogerie Mécanique,<br>Savoir-Faire et Précision</h2>
  <p class="element-left">Les montres mécaniques sont le cœur battant de l'horlogerie de luxe. Leur mouvement complexe et leur savoir-faire artisanal transcendent le temps, offrant une précision et une élégance incomparables.</p>
</div>
  <a class="btn-primary" href="?page=mecanique">Explorer les montres mécaniques</a>
</div>
<div id="section-cta-mecanique-right">
<img src="model/img/cta-mecanique.webp" alt="cta-mecanique">
</div>
</div>

<div id="section-cta-vente">
<div id="section-cta-vente-small">
<div id="section-cta-vente-top">
  <h2 class="color-alternate">Vous avez une montre à vendre ?</h2>
  <p class="color-alternate">Si vous possédez une montre d'exception que vous souhaitez vendre,<br>nous sommes là pour vous.</p>
</div>
<a class="btn-primary" href="?page=ajouter">Vendre ma montre</a>
</div>
</div>