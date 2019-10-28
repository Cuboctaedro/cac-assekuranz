<?php
if(!isset($classes)) {$classes = " ";};
 ?>
<picture>
    <!--[if IE 9]><video style="display: none;><![endif]-->
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 480,
            'height'  => 320,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--sm" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 768,
            'height'  => 384,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--md" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 1024,
            'height'  => 512,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--lg" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 1280,
            'height'  => 426,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xl" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 1600,
            'height'  => 400,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 1600,
            'height'  => 400,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        class="lazyload <?= $classes ?> block w-full"
        alt="<?= $image->alt() ?>" />
</picture>
