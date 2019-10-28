</main>
<?php snippet('sidebar') ?>
<?php
$impressum = $pages->find('impressum');
$datenschutz = $pages->find('datenschutzbestimmungen');

 ?>
<footer id="footer">
    <hr class="mx-15 border-brand border-t-1 h-0" />
    <nav  class="">
        <ul class="flex flex-row flex-wrap">
            <?php if($impressum): ?>
                <li class="px-15">
                    <a class="text-sm text-brand hover:text-brand_light_1" href="<?= $impressum->url() ?>"><?= $impressum->title() ?></a>
                </li>
            <?php endif; ?>
            <?php if($datenschutz): ?>
                <li class="px-15">
                    <a class="text-sm text-brand hover:text-brand_light_1" href="<?= $datenschutz->url() ?>"><?= $datenschutz->title() ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</footer>
</div>
<?= mix('/main.js') ?>
</body>
</html>
