<div id="formulaire">
  <div id="formulaire-top">
    <h1>Mon profil</h1>
  </div>

  <form id="formulaire-bottom" action="" method="post">
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" value="<?=$infos['prenom']?>" required>
        <input type="text" name="nom" value="<?=$infos['nom']?>"required>
      </div>
      <input type="text" name="email" value="<?=$infos['email']?>"required>
      <input type="text" name="mdp" value="Nouveau mot de passe" required>
      <input type="text" name="mdp_conf" value="Confirmer mot de passe"required>
    </div>
    <div id="formulaire-button-container">
      <input class="btn-primary" type="submit" name="save" value="Sauvegarder">
      <input class="btn-primary" type="submit" name="deconnexion" value="Déconnexion">
    </div>
    <input class="btn-delete" type="submit" name="del" value="Supprimer mon compte">
  </form>

</div>

<div id="section-cta-produits">
<div id="section-cta-vente-small">
<div id="section-cta-vente-top">
  <h2 class="color-alternate">Consulter mes montres</h2>
  <p class="color-alternate">Parcourez toutes vos montres en vente.</p>
</div>
<a class="btn-primary" href="?page=mesproduits">Voir mes montres</a>
</div>
</div>