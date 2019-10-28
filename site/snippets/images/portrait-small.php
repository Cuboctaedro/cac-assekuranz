<?php
if(!isset($classes)) {$classes = " ";};
 ?>
<picture>
    <!--[if IE 9]><video style="display: none;><![endif]-->
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 455,
            'height'  => 682,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--sm" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 232,
            'height'  => 348,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--md" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 232,
            'height'  => 348,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 455,
            'height'  => 682,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        class="lazyload <?= $classes ?> block w-full"
        alt="<?= $image->alt() ?>" />
</picture>
