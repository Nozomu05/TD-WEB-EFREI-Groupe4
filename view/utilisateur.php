<h1>Mes Infos</h1>
<?php
   /* foreach($infos as $cle => $info) {
        if($cle !== "id_user"){
            if($cle === "mdp"){
                ?>
                    <h2>mot de passe</h2>
                    <p>********</p>
                <?php
            }else{
                ?>
                    <h2><?=$cle?></h2>
                    <?=$info?>
                <?php
            }
        }
    }*/
?>

<div id="formulaire">
  <div id="formulaire-top">
    <h1>Mon profil</h1>
  </div>

  <form id="formulaire-bottom" action="?page=finalisation" method="post">
    <div id="formulaire-bottom-top">
      <div id="nom-container">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="nom" placeholder="Nom">
      </div>
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="mot_de_passe" placeholder="Nouveau mot de passe">
      <input type="text" name="mot_de_passe_confirmation" placeholder="Confirmer mot de passe">
    </div>
    <div id="formulaire-button-container">
      <input class="btn-primary" type="submit" value="Sauvegarder">
      <input class="btn-delete" type="submit" value="Supprimer mon compte">
    </div>
  </form>

</div>