
    <h2><?= esc($title) ?></h2>

<?php if (! empty($utente) && is_array($utente)): ?>

    <?php foreach ($utente as $utente_item): ?> 

        <h3><?= esc($utente_item['userid']) ?></h3>

        <div class="main">
            <?= esc($utente_item['email']) ?>
        </div>
       
    <?php endforeach; ?>

<?php else: ?>

    <h3>No Utente</h3>

    <p>Unable to find any user for you.</p>

<?php endif ?>