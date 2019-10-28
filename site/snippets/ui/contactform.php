<section class="p-15 w-full ">

    <?php if ($contactform->success()): ?>

       <?= $page->successmessage()->kt(); ?>

    <?php else: ?>

        <form action="<?= $page->url() ?>" method="POST">

            <label for="name" class="block mb-15">
                <span class="text-sm text-gray-700">Name, Vorname:</span>
                <input type="text" id="name" name="name" value="<?= $contactform->old('name'); ?>" required autocomplete="name" class="form-input mt-1 block w-full">
                <?php if ($contactform->error('name')): ?>
                    <p class="error-text"><?php echo implode('<br>', $contactform->error('name')) ?></p>
                <?php endif; ?>
            </label>

            <label for="email" class="block mb-15">
                <span class="text-sm text-gray-700">E-Mail:</span>
                <input type="email" id="email" name="email" value="<?= $contactform->old('email'); ?>" required autocomplete="email" class="form-input mt-1 block w-full">
                <?php if ($contactform->error('email')): ?>
                    <p class="error-text"><?php echo implode('<br>', $form->error('email')) ?></p>
                <?php endif; ?>
            </label>

            <label for="phone" class="block mb-15">
                <span class="text-sm text-gray-700">Telefon:</span>
                <input type="tel" id="phone" name="phone" value="<?= $contactform->old('phone'); ?>" autocomplete="tel" class="form-input mt-1 block w-full">
                <?php if ($contactform->error('email')): ?>
                    <p class="error-text"><?php echo implode('<br>', $contactform->error('phone')) ?></p>
                <?php endif; ?>
            </label>

            <div class="block mb-15">
                <span class="text-sm text-gray-700">Wie sollen wir Sie kontaktieren? (Telefon oder E-Mail)</span>
                <div class="mt-10">
                    <div>
                        <label class="inline-flex items-center" for="teloderemail-1">
                            <input type="radio" class="form-radio" id="teloderemail-1" name="teloderemail" value="Telefon">
                            <span class="ml-10 text-sm text-gray-700">Telefon</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center" for="teloderemail-2">
                            <input type="radio" class="form-radio" id="teloderemail-2" name="teloderemail" value="E-Mail">
                            <span class="ml-10 text-sm text-gray-700">E-Mail</span>
                        </label>
                    </div>
                </div>
            </div>

            <label for="wann" class="block mb-15">
                <span class="text-sm text-gray-700">Wann sollen wir Sie kontaktieren? (Datum und Uhrzeit):</span>
                <input type="text" id="wann" name="wann" value="<?= $contactform->old('wann'); ?>" class="form-input mt-1 block w-full">
            </label>

            <label for="message" class="block mb-15">
                <span class="text-sm text-gray-700">Nachricht:</span>
                <textarea  name="message" id="message" class="form-textarea mt-10 block w-full" rows="5"><?= $contactform->old('message'); ?></textarea>
            </label>

            <div class="block mb-15">
                <label for="impressum" class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox" id="impressum" name="impressum" value="impressum" >
                    <span class="ml-10">Ja, ich habe die Datenschutzbestimmungen (Impressum) gelesen.</span>
                </label>
                <?php if ($contactform->error('impressum')): ?>
                    <p class="error-text"><?php echo implode('<br>', $contactform->error('impressum')) ?></p>
                <?php endif; ?>
            </div>

            <?php echo csrf_field(); ?>
            <?php echo honeypot_field(); ?>

            <div class="flex flex-row flex-wrap w-full">

                <input type="submit" value="Senden" class="px-20 py-5 text-sm uppercase tracking-wider px-20 bg-brand text-white shadow-md hover:shadow-xl" style="cursor:pointer;">

            </div>

        </form>

    <?php endif; ?>

</section>
