<?php if(!$page->isHomePage()): ?>

<?php if ($page->coverimage()->exists() && $page->coverimage()->isNotEmpty()) {
    $cover = $page->coverimage()->toFile();
} else if ($site->siteimage()) {
    $cover = $site->siteimage()->toFile();
}
?>

<div class="p-15">
    <?php if ($cover) : ?>

    <div class="relative">

        <div class="ratio ratio-landscape bg-center bg-cover " style="background-image:url(<?= $cover->url() ?>);" aria-hidden="true">
        </div>
        <?php
            if( $page->headertext()->isNotEmpty()) {
                $slogan = $page->headertext();
            } else {
                $slogan = $site->headertext();
            }
        ?>
        <div class="slogan lg:absolute w-full lg:w-1/3 left-0  bg-brand text-white font-title font-bold uppercase p-15 text-lg leading-tight tracking-wider opacity-75 shadow-lg">
            <?= $slogan ?>
        </div>
    </div>

    <?php endif; ?>
        <?php snippet('ui/breadcrumbs') ?>
        <hr class="border-brand border-solid border-t h-0" />

</div>

<?php else: ?>

    <div class="p-15">
        <?php if ($covers = $page->coverimages()->toFiles()) : ?>

        <div class="relative ratio ratio-landscape">
            <?php $n = 1; ?>
            <?php foreach ($covers as $cover): ?>

            <div class="absolute inset-0 ratio ratio-landscape bg-center bg-cover headerimage headerimage-<?= $n ?>" style="background-image:url(<?= $cover->url() ?>);" aria-hidden="true">
            </div>
                <?php $n = $n + 1; ?>
            <?php endforeach; ?>
            <?php
                if( $page->headertext()->isNotEmpty()) {
                    $slogan = $page->headertext();
                } else {
                    $slogan = $site->headertext();
                }
            ?>
            <div class="slogan lg:absolute w-full lg:w-1/3 left-0  bg-brand text-white font-title font-bold uppercase p-15 text-lg leading-tight tracking-wider opacity-75 shadow-lg">
                <?= $slogan ?>
            </div>
        </div>

        <?php endif; ?>
    </div>

<?php endif; ?>
