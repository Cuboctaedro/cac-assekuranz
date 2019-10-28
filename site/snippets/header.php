<!doctype html>
<html lang="en">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="description" content="<?= e($page->isHomePage(), $site->description() , $page->forcedDescription() ) ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>

    <?php snippet('meta');?>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700" rel="stylesheet">

    <?= mix('/main.css') ?>

</head>

<body itemscope itemtype="http://schema.org/WebPage" class="font-sans text-black bg-white">

    <div class="skiplink_container">
        <a class="skiplink"  href="#main">Skip to content</a>
        <a class="skiplink" href="#nav">skip to main navigation</a>
    </div>

    <div class="container mx-auto px-15">

        <header id="header" class="flex flex-row flex-wrap justify-between md:justify-end items-start pt-15 md:pt-30 relative">
            <?php if ($logo = $site->sitelogo()->toFile()): ?>

            <div class="w-full sm:w-290 px-15">
                <div class="w-260 mx-auto">
                    <a href="<?= $site->url() ?>" class="ratio ratio-logo  block bg-center bg-contain bg-no-repeat relative overflow-hidden" style="background-image:url(<?= $logo->url() ?>);flex-basis:auto;">
                    <?php if ($page->isHomePage()) : ?>
                        <h1 itemprop="name" class="hide"><?= $site->title() ?></h1>
                    <?php else: ?>
                        <p class="hide"><?= $site->title() ?></p>
                    <?php endif; ?>
                    </a>
                </div>
            </div>

            <?php endif; ?>

            <div class="w-auto md:w-1/2 lg:w-2/3 xl:w-3/4 px-15">
                <?php snippet('ui/searchform'); ?>
            </div>

            <div class="w-auto md:w-full lg:w-2/3 lg:-mt-30 xl:w-3/4 px-15">
                <?php snippet('ui/menu'); ?>
            </div>

        </header>


    <main id="main" class="mb-60">
