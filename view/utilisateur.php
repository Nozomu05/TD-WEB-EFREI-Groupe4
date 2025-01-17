
<div id="formulaire">
  <div id="formulaire-top">
    <h1>Mon profil</h1>
  </div>

  <form id="formulaire-bottom" action="" method="post">
  <a class="btn-primary" href="?page=mesproduits">Mes produits</a>
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" placeholder="<?=$infos['prenom']?>" required>
        <input type="text" name="nom" placeholder="<?=$infos['nom']?>" required>
      </div>
      <input type="text" name="email" placeholder="<?=$infos['email']?>" required>
      <input type="text" name="mdp" placeholder="Nouveau mot de passe" required>
      <input type="text" name="mdp_conf" placeholder="Confirmer mot de passe" required>
    </div>
    <div id="formulaire-button-container">
      <input class="btn-primary" type="submit" name="save" value="Sauvegarder">
      <input class="btn-delete" type="submit" name="del" value="Supprimer mon compte">
    </div>
    <input class="btn-primary" type="submit" name="deconnexion" value="Déconnexion">
  </form>

</div>