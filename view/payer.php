<!--<h1>mon panier<h1>
 
<?php 
   /* $prix = 0;
    foreach($produits as $produit){
        $prix += $produit['prix']*$produit['quantite'];
        ?> 
            <?= $produit['nom']?><br><?= $produit['prix']?>€
        <?php
    }
?>

Prix total: <?=$prix*/?> <br>

<a href="?page=merci">
    <button>Payer</button>
</a>

<div id="formulaire">
  <div id="formulaire-top">
    <h1>Finalisez<br>votre commande</h1>
    <p>Avant de finaliser votre commande, veuillez vérifier les détails ci-dessous et compléter
      <br>vos informations pour que nous puissions préparer l'envoi de votre nouvelle montre.</p>
  </div>

  <form id="formulaire-bottom" action="?page=finalisation" method="post">
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="nom" placeholder="Nom">
      </div>
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="pays" placeholder="Pays">
      <input type="text" name="adresse" placeholder="Adresse">
      <div id="ville-container">
        <input type="text" name="code_postal" placeholder="Code postal">
        <input type="text" name="ville" placeholder="Ville">
      </div>
      <input type="text" name="numero_carte" placeholder="Numéro de carte">
      <div id="date-expiration-container">
        <input type="text" name="date_expiration" placeholder="Date d'expiration">
        <input type="text" name="cvv" placeholder="CVV">
      </div>
    </div>
    <input class="btn-primary" type="submit" value="Finaliser la commande">
  </form>

</div>