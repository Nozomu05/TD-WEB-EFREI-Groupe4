<!--<h1>Ajouter un produit</h1>

<form action="" method="post">
  <fieldset>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez le nom du produit</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le nom du produit" name="nom" required>
    </div>
    <div>
      <label for="exampleSelect1" class="form-label mt-4" >Selectionnez l'état</label>
      <select class="form-select" id="exampleSelect1" name="etat">
        <option value="neuf">neuf</option>
        <option value="peu usé">peu usé</option>
        <option value="usé">usé</option>
      </select>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez le prix</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le prix" step="0.01" name="prix" required>
    </div>
    <div>
      <label for="exampleSelect1" class="form-label mt-4" >Selectionnez le type</label>
      <select class="form-select" id="exampleSelect1" name="type">
        <option value="mécanique">mécanique</option>
        <option value="quartz">quartz</option>
      </select>
    </div>
    <div>
      <label for="exampleTextarea" class="form-label mt-4">Description</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

-->

<div id="formulaire">
  <div id="formulaire-top">
    <h1>Vendre une montre</h1>
  </div>

  <form id="formulaire-bottom" action="?page=finalisation" method="post">
    <div id="formulaire-bottom-top">
      <input type="file" name="image" placeholder="Ajouter une image">
      <input type="text" name="titre" placeholder="Titre">
      <textarea name="description" placeholder="Description"></textarea>
      <div id="prix-marque-container">
        <input type="text" name="prix" placeholder="Prix">
        <input type="text" name="marque" placeholder="Marque">
      </div>
      <div id="type-etat-container">
        <select name="type">
          <option value="defaut" selected>Choisir un type</option>
          <option value="quartz">Quartz</option>
          <option value="mecanique">Mécanique</option>
        </select>
        <select name="etat">
          <option value="defaut" selected>Choisir un état</option>
          <option value="neuf">Mauvais état</option>
          <option value="occasion">Bon état</option>
          <option value="occasion">Très bon état</option>
        </select>
        </div>
    </div>
      <input class="btn-primary" type="submit" value="Mettre en vente">
  </form>

</div>