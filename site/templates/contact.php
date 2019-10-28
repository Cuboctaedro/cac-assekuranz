<?php snippet('header') ?>
<?php snippet('pageheader') ?>

<header class="p-15">
    <h1 itemprop="name" class="text-brand text-3xl font-title font-bold"><?= $page->title()->html() ?></h1>
</header>

<section itemprop="description" class="p-15 mx-auto w-full">
    <?= $page->body()->kt(); ?>
</section>

<section >
    <ul class="flex flex-row flex-wrap unlist items-stretch mb-60">
        <?php foreach($page->people()->toStructure() as $person): ?>
        <li class="px-15 pb-30 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="shadow-md hover:shadow-xl h-full">

                <?php if ($person->portrait()->isNotEmpty()) : ?>
                <div class="ratio ratio-square bg-center bg-cover" style="background-image:url(<?=  $person->portrait()->toFile()->url() ?>);"></div>
                <?php endif; ?>

                <div class="p-20">
                    <h2  class="font-title font-bold text-lg leading-tight mb-10 text-brand"><?= $person->name() ?></h2>
                    <div class="text-sm text-gray-dark">
                        <span class="block mb-5"><?= $person->position() ?></span>
                    <a href="mailto:<?= $person->email() ?>?subject=Mail from Our Site" class="hover:text-brand"><?= $person->email() ?></a>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('ui/contactform') ?>

<?php snippet('footer') ?>
