<script>
  function deconnexion(){
    window.location.href = "?page=deconnexion";
}
</script>
<div id="formulaire">
  <div id="formulaire-top">
    <h1>Mon profil</h1>
  </div>

  <form id="formulaire-bottom" action="" method="post">
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" placeholder="<?=$infos['prenom']?>" >
        <input type="text" name="nom" placeholder="<?=$infos['nom']?>" >
      </div>
      <input type="text" name="email" placeholder="<?=$infos['email']?>" >
      <input type="password" name="mdp" placeholder="Nouveau mot de passe" >
      <input type="password" name="mdp_conf" placeholder="Confirmer mot de passe" >
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