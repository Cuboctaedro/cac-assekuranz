<meta property="og:title" content="<?= $page->title()?>" />
<meta property="og:description" content="<?= $page->forcedDescription()?>" />
<meta property="og:url" content="<?= $page->url()?>" />
<meta property="og:image" content="<? $page->forcedImage()->thumb([
    'width'   => 1200,
    'height'  => 630,
    'crop'    => true
])->url() ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<? $site->siteauthortwitter() ?>">
<meta name="twitter:creator" content="<? $page->forcedAuthor() ?>">
<meta name="twitter:title" content="<? $page->title() ?>">
<meta name="twitter:description" content="<?= $page->forcedDescription()?>">
<meta name="twitter:image" content="<? $page->forcedImage()->thumb([
    'width'   => 1200,
    'height'  => 630,
    'crop'    => true
])->url() ?>" />

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "<? $page->title() ?>",
    "description": "<?= $page->forcedDescription()?>",
    "publisher": {
        "name": "<? $site->title() ?>"
    },
    "image": "<? $page->forcedImage()->thumb(['width'=> 1200,'height'=> 630,'crop'=> true])->url() ?>"
}
</script>
