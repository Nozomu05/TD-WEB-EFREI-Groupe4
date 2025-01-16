
<div id="features-products-all">
    <div id="features-products-top-all">
        <h1>Explorez toutes<br>nos montres de luxe</h1>
        <p>Explorez des modèles issus des plus grandes maisons horlogères et laissez-vous séduire par l'élégance intemporelle et la précision inégalée de chaque montre.</p>
    </div>

    <div id="product-filter">
        <select name="category" id="category">
            <option value="all">Toutes les montres</option>
            <option value="quartz">Quartz</option>
            <option value="mecanique">Mécanique</option>
        </select>
    </div>

    <div id="features-products-container">  
        <?php foreach($produits as $produit){
            ?> 
                <a href="?page=produit&id=<?=$produit['id_produit']?>" id="features-products-container-item">
                    <div id="features-products-container-item-img">
                        <img src="../img/features-products-bottom4.webp" alt="features-products-bottom">
                    </div>
                    <div id="features-products-container-item-text">
                        <div id="features-products-container-item-text-top">
                            <p class="medium-weight-text"><?= $produit['nom']?></p>
                            <p class="small-text"><br><?= $produit['type']?>€</p>
                        </div>
                        <div id="features-products-container-item-text-bottom">
                            <p><br><?= $produit['prix']?>€</p>
                        </div>
                    </div>
                </a>
            <?php
        }?>
    </div>
</div>

<div id="section-cta-vente">
  <div id="section-cta-vente-small">
    <div id="section-cta-vente-top">
      <h2 class="color-alternate">Offrez une nouvelle<br>vie à votre montre</h2>
      <p class="color-alternate">Vous avez une montre précieuse que vous souhaitez vendre ? Confiez-la à nos experts<br>pour une évaluation gratuite et bénéficiez d’une transaction sécurisée.</p>
    </div>
      <?php
          if(sizeof($_SESSION)===0){
            ?>
              <a class="btn-primary" href="?page=connexion">Vendre ma montre</a>
            <?php
          }else{
            ?>
              <a class="btn-primary" href="?page=ajouter">Vendre ma montre</a>
            <?php
          }
        ?>
  </div>
</div>