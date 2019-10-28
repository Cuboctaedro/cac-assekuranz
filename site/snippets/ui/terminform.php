<?php if ($terminform->success()): ?>
   Success!
<?php else: ?>
   <?php snippet('uniform/errors', ['form' => $terminform]); ?>
<?php endif; ?>

<form action="<?= $page->url() ?>" method="POST">

    <label for="name" class="block mb-15">
        <span class="text-sm text-gray-700">Name, Vorname:</span>
        <input type="text" id="name" name="name" value="<?= $terminform->old('name'); ?>" required autocomplete="name" class="form-input mt-1 block w-full">
        <?php if ($terminform->error('name')): ?>
            <p class="error-text"><?php echo implode('<br>', $terminform->error('name')) ?></p>
        <?php endif; ?>
    </label>

    <label for="phone" class="block mb-15">
        <span class="text-sm text-gray-700">Telefon:</span>
        <input type="tel" id="phone" name="phone" value="<?= $terminform->old('phone'); ?>" required autocomplete="tel" class="form-input mt-1 block w-full">
        <?php if ($terminform->error('phone')): ?>
            <p class="error-text"><?php echo implode('<br>', $terminform->error('phone')) ?></p>
        <?php endif; ?>
    </label>

    <label for="wann" class="block mb-15">
        <span class="text-sm text-gray-700">Wann sollen wir Sie kontaktieren? (Datum und Uhrzeit):</span>
        <input type="text" id="wann" name="wann" value="<?= $terminform->old('wann'); ?>" class="form-input mt-1 block w-full">
    </label>

    <label class="block mb-15">
        <span class="text-sm text-gray-700">Nachricht</span>
        <textarea class="form-textarea mt-1 block w-full" rows="3" name="message" id="message"><?= $terminform->old('message'); ?></textarea>
    </label>

    <div class="block mb-15">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" id="impressum" name="impressum" value="impressum" >
            <span class="ml-10 text-sm text-gray-700">Ja, ich habe die Datenschutzbestimmungen (Impressum) gelesen.</span>
        </label>
        <?php if ($terminform->error('impressum')): ?>
            <p class="error-text"><?php echo implode('<br>', $terminform->error('impressum')) ?></p>
        <?php endif; ?>
    </div>

    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="submit" value="Senden" class="text-sm uppercase tracking-wider px-20 py-10 bg-brand text-white shadow-md hover:shadow-md" style="cursor:pointer;">

</form>
