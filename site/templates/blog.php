<?php snippet('header') ?>
<?php snippet('pageheader') ?>

<header class="p-15">
    <h1 itemprop="name" class="text-brand text-3xl font-title font-bold"><?= $pagetitle ?></h1>
</header>

<section itemscope itemtype="http://schema.org/Blog">
    <ul class="flex flex-row flex-wrap unlist items-stretch">
        <?php foreach($articles as $item): ?>
        <li class="px-15 pb-30 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <?php snippet('card', array('item' => $item)); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('footer') ?>
