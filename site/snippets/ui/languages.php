<nav class="languages" role="navigation" aria-label="Language switch">
    <ul>
    <?php foreach($site->languages() as $language): ?>
        <li>
            <a href="<?= $page->url($language->code()) ?>" class="<?php e($site->language() == $language, ' active') ?>">
                <?= html($language->name()) ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
