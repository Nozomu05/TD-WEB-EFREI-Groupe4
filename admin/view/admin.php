<h1>Liste utilisateur</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email<th>
            <th>Date naissance</th>
            <th>Date de création</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($utilisateurs as $utilisateur){
                ?>
                    <tr>
                        <td><?= htmlspecialchars($utilisateur['id_user']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['pseudo']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['prenom']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['email']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['date_naissance']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['date_creation']) ?></td>
                        <td>
                            <a href="?page=deleteTask&id_task=<?= $utilisateur['id_user'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
        }?>
    </tbody>
</table>