<?php if (!empty($_alerts)): ?>

    <div class="mb-3">

        <?php foreach ($_alerts as $alert): ?>

            <p class="alert h5 text-white bg-<?php echo $alert['type']; ?>">

                <?php echo $alert['text']; ?>

            </p>

        <?php endforeach; ?>

    </div>

    <?php flush_alerts(); ?>

<?php endif; ?>