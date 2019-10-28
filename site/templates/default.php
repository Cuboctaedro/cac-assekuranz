<?php snippet('header') ?>
<?php snippet('pageheader') ?>

<header class="p-15">
    <h1 class="text-brand text-3xl font-title font-bold" itemprop="name"><?= $page->title()->html() ?></h1>
</header>
<section itemprop="description" class="p-15 mx-auto w-full lg:w-2/3 xl:w-1/2 maintext">
    <?= $page->body()->kt(); ?>
</section>
<?php snippet('footer') ?>
