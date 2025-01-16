<h1>Connexion</h1>

<!--<form action="" method="post">
  <fieldset>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
    </div>
    <div>
      <label for="exampleInputPassword1" class="form-label mt-4">Entrez votre mot de passe</label>
      <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="mot de passe" autocomplete="off" required>
      <kpm-field-badge type="default" loading="false" menu-type="login" class="kpm_input-field-button kpm_gray-key-icon" style="--FieldBadge-ZLevel: 3 !important;"></kpm-field-badge>
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
  </fieldset>
</form>-->

<div id="formulaire">
  <div id="formulaire-top">
    <h1>Connexion</h1>
    <p>Remplissez le formulaire ci-dessous pour vous connecter.</p>
  </div>

  <form id="formulaire-bottom" action="?page=connexion" method="post">
    <div id="formulaire-bottom-top">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="mot_de_passe" placeholder="Mot de passe">
    </div>
    <div id="formulaire-button-container-vertical">
      <input class="btn-primary" type="submit" value="Se connecter">
      <a href="?page=inscription">Vous n'avez pas de compte ? Inscrivez-vous</a>
    </div>
  </form>

</div>