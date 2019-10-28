<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="shadow-md hover:shadow-xl h-full">

    <?php if ($item->coverimage()->isNotEmpty()) : ?>
    <div class="ratio ratio-gold bg-center bg-cover" style="background-image:url(<?= $item->coverimage()->toFile()->url() ?>);"></div>
    <?php endif; ?>

    <div class="p-20">
        <h2 itemprop="headline" class="font-title font-bold text-lg leading-tight mb-10">
            <a href="<?= $item->url() ?>" itemprop="url" class="text-brand no-underline"><?= $item->title() ?></a>
        </h2>
        <time datetime="<?= $item->date()->toDate('c') ?>" itemprop="datePublished" class="mb-10 text-brand_light_1 text-sm uppercase tracking-wider block"><?= $item->date()->toDate('j. M Y') ?></time>

        <meta itemprop="author" content="<?= $site->title() ?>">
        <meta itemprop="publisher" content="<?= $site->title() ?>">
        <div itemprop="description" class="text-sm text-gray-dark">
            <?= $item->intro()->kt() ?>
        </div>
    </div>

</article>
