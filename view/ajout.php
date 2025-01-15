<h1>Ajouter un produit</h1>

<form action="" method="post">
  <fieldset>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez le nom du produit</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le nom du produit" name="nom" required>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez la quantite disponible</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez la quantite disponible" step="1" name="quantite" required>
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Entrez le prix</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le prix" step="0.01" name="prix" required>
    </div>
    <div>
      <label for="exampleSelect1" class="form-label mt-4" >Selectionnez le type</label>
      <select class="form-select" id="exampleSelect1" name="type">
        <option value="technologie">technologie</option>
        <option value="quotidien">quotidien</option>
        <option value="sport">sport</option>
      </select>
    </div>
    <div>
      <label for="exampleTextarea" class="form-label mt-4">Description</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>