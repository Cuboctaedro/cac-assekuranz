<nav class="breadcrumbs" role="navigation" aria-label="breadcrumb">
    <ol class="flex flex-row text-brand" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <?php
        $c = 1;
        foreach($site->breadcrumb() as $crumb):
        ?>
        <li class="crumb" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $crumb->url() ?>" itemprop="item" class="no-underline text-brand text-sm">
                <span itemprop="name"><?= $crumb->title()->html() ?></span>
                <meta itemprop="position" content="<?= $c ?>" />
            </a>
        </li>
        <?php
        $c = $c + 1;
        endforeach;
        ?>
    </ol>
</nav>
