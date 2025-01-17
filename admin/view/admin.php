
<div id="hero-section">
    <a class="btn-primary" href="?page=deconnexion">Déconnexion</a>
    <div id="hero-section-top">
        <div id="hero-section-small-top">
            <h1>Liste utilisateur</h1>
        </div>
    </div>

    <div id="hero-section-bottom">
        <div x-data="{ search: '' }">
            <input type="text" placeholder="Rechercher un utilisateur..." x-model="search" class="form-control mb-3">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pseudo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Date naissance</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
        <tbody>
                    <?php foreach ($utilisateurs as $utilisateur) { ?>
                        <tr x-show="['<?= htmlspecialchars($utilisateur['id_user']) ?>', '<?= htmlspecialchars($utilisateur['pseudo']) ?>', '<?= htmlspecialchars($utilisateur['nom']) ?>', '<?= htmlspecialchars($utilisateur['prenom']) ?>', '<?= htmlspecialchars($utilisateur['email']) ?>'].some(field => field.toLowerCase().includes(search.toLowerCase()))">
                            <td><?= htmlspecialchars($utilisateur['id_user']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['pseudo']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['prenom']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['email']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['date_naissance']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['date_creation']) ?></td>
                            <td>
                                <form x-data="{}">
                                    <input class="btn-delete" type="submit" name="del" value="Supprimer le compte">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Inclusion d'Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>