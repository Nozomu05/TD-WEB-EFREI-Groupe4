<h1>Inscription</h1>
<form action="" method="post">
  <fieldset>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre nom</label>
      <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom" required>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre prenom</label>
      <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre prenom" required>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre pseudonyme</label>
      <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre pseudonyme" required>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
      <small id="emailHelp" class="form-text text-muted">Nous ne partageons votre email avec personne.</small>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez votre date de naissance</label>
      <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <small id="emailHelp" class="form-text text-muted">Nous ne partageons votre email avec personne.</small>
    </div>
    <div>
      <label for="exampleInputPassword1" class="form-label mt-4">Entrez votre mot de passe</label>
      <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="mot de passe" autocomplete="off" required>
      <kpm-field-badge type="default" loading="false" menu-type="login" class="kpm_input-field-button kpm_gray-key-icon" style="--FieldBadge-ZLevel: 3 !important;"></kpm-field-badge>
    </div>
    <button type="submit" class="btn btn-primary">Inscription</button>
  </fieldset>
</form>