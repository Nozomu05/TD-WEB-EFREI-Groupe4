
<div id="formulaire">
  <div id="formulaire-top">
    <h1>Mon profil</h1>
  </div>

  <form id="formulaire-bottom" action="" method="post">
  <input class="btn-primary" type="submit" name="produits" value="Mes produits">
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" placeholder="<?=$infos['prenom']?>" >
        <input type="text" name="nom" placeholder="<?=$infos['nom']?>" >
      </div>
      <input type="text" name="email" placeholder="<?=$infos['email']?>" >
      <input type="text" name="mdp" placeholder="Nouveau mot de passe" >
      <input type="text" name="mdp_conf" placeholder="Confirmer mot de passe" >
    </div>
    <div id="formulaire-button-container">
      <input class="btn-primary" type="submit" name="save" value="Sauvegarder">
      <input class="btn-delete" type="submit" name="del" value="Supprimer mon compte">
    </div>
    <input class="btn-primary" type="submit" name="deconnexion" value="Déconnexion">
  </form>

</div>