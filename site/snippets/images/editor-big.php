<?php
if(!isset($classes)) {$classes = " ";};
 ?>
<picture>
    <!--[if IE 9]><video style="display: none;><![endif]-->
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 480,
            'quality' => 80
        ])->url() ?>"
        media="--md" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 768,
            'quality' => 80
        ])->url() ?>"
        media="--lg" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 1024,
            'quality' => 80
        ])->url() ?>"
        media="--xl" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 1280,
            'quality' => 80
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 1280,
            'quality' => 80
        ])->url() ?>"
        class="lazyload <?= $classes ?>"
        alt="<?= $image->alt() ?>" />
</picture>
