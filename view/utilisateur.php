<h1>Mes Infos</h1>
<?php
    foreach($infos as $cle => $info) {
        if($cle !== "id_user" && $cle !== "role"){
            if($cle === "mdp"){
                ?>
                    <h2>mot de passe</h2>
                    <p>********</p>
                <?php
            }else{
                ?>
                    <h2><?=$cle?></h2>
                    <?=$info?>
                <?php
            }
        }
    }
?>