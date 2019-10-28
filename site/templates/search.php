<?php snippet('header') ?>

<header class="p-15">
    <h1 class="text-brand text-3xl font-title" itemprop="name">Suche: <?= $query ?></h1>
</header>
<section itemprop="description" class="p-15 mx-auto w-full lg:w-2/3 xl:w-1/2 maintext">
    <?php if (count($results) > 0): ?>
    <ul class="unlist">
        <?php foreach($results as $result): ?>
            <li class="mb-30">
                <h2>
                    <a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a>
                </h2>
                <div>
                    <?= $result->sum() ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
        <p>No results found for <?= $query ?>.</p>
    <?php endif; ?>
</section>

<?php snippet('footer') ?>
