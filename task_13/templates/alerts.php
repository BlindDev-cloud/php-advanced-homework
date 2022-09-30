<?php if (!empty($_alerts)): ?>

    <div class="mb-3">

        <?php foreach ($_alerts as $alert): ?>

            <div class="alert alert-<?php echo $alert['type']; ?>">

                <?php echo $alert['text']; ?>

            </div>

        <?php endforeach; ?>

    </div>

    <?php flush_alerts(); ?>

<?php endif; ?>