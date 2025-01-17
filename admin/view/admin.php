<h1>Liste utilisateur</h1>
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
                        <div x-data="{}">
                            <a href="#" @click.prevent="if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) { window.location.href = '?page=deleteTask&id_task=<?= $utilisateur['id_user'] ?>'; }">Supprimer</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Inclusion d'Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>