<div x-data="{ showConfirmDialog: false, userToDelete: null }">
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
                if($utilisateur['role']==='user') {
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
                                <button @click="showConfirmDialog = true; userToDelete = <?= $utilisateur['id_user'] ?>" class="btn-delete">
                                    Supprimer
                                </button>
                            </td>
                        </tr>
                    <?php
                }
            }?>
        </tbody>
    </table>

    <!-- Boîte de dialogue de confirmation -->
    <div x-show="showConfirmDialog" 
         style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center;">
        <div style="background: white; padding: 2rem; border-radius: 0.5rem; text-align: center;">
            <p>Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
            <div style="margin-top: 1rem;">
                <button @click="window.location.href='?page=deleteTask&id_task=' + userToDelete" class="btn-delete">
                    Confirmer
                </button>
                <button @click="showConfirmDialog = false" style="margin-left: 1rem;">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>