<?php snippet('header') ?>
<?php snippet('pageheader') ?>

<section itemprop="description" class="mx-auto w-full lg:w-2/3 xl:w-1/2 ">
    <div class="px-15 pt-15 pb-30 maintext">
        <?= $page->body()->kt(); ?>
    </div>
</section>
<div class="w-full flex flex-row flex-wrap">
    <?php foreach($page->activities()->toStructure() as $activity): ?>
        <div class="p-15 w-full lg:w-1/3">
            <div class="bg-brand text-white text-center uppercase tracking-wider px-15 py-30">
                <?= $activity->activity() ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php snippet('footer') ?>
