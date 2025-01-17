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
        <?php foreach ($info as $info){
             if($info['role']==='user') {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($info['id_user']) ?></td>
                        <td><?= htmlspecialchars($info['pseudo']) ?></td>
                        <td><?= htmlspecialchars($info['nom']) ?></td>
                        <td><?= htmlspecialchars($info['prenom']) ?></td>
                        <td><?= htmlspecialchars($info['email']) ?></td>
                        <td><?= htmlspecialchars($info['date_naissance']) ?></td>
                        <td><?= htmlspecialchars($info['date_creation']) ?></td>
                        
                        <td>
                            <a href="?page=deleteTask&id_task=<?= $info['id_user'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
             }
        }?>
    </tbody>
</table>