<h1>Ajouter un produit</h1>

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