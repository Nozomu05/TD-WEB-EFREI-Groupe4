<h1>Mes Messages</h1>

<?php
    foreach($messages as $message){
        ?>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cher client,</h5>
                    </div>
                    <p class="mb-1"><?=$message['message']?></p>
                    <small class="text-muted">Bien cordialement,</small>
                </a>
            </div>
        <?php
    }
?>



