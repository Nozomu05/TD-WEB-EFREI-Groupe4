<div id="formulaire">
  <div id="formulaire-top">
    <h1>Vendre une montre</h1>
  </div>

  <form id="formulaire-bottom" action="" method="post">
    <div id="formulaire-bottom-top">
      <input type="file" name="image" placeholder="Ajouter une image" required>
      <input type="text" name="nom" placeholder="Titre" required>
      <textarea name="description" placeholder="Description" required></textarea>
      <div id="prix-marque-container">  
        <input type="text" name="prix" placeholder="Prix" required>
        <input type="text" name="marque" placeholder="Marque" required>
      </div>
      <div id="type-etat-container">
        <select name="type">
          <option value="defaut" selected>Choisir un type</option>
          <option value="quartz">Quartz</option>
          <option value="mecanique">Mécanique</option>
        </select>
        <select name="etat">
          <option value="defaut" selected>Choisir un état</option>
          <option value="neuf">neuf</option>
          <option value="peu usé">peu usé</option>
          <option value="usé">usé</option>
        </select>
        </div>
    </div>
      <input class="btn-primary" type="submit" value="Mettre en vente">
  </form>

</div>