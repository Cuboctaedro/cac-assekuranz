<?php
if(!isset($classes)) {$classes = " ";};
 ?>
<picture>
	<!--[if IE 9]><video style="display: none;><![endif]-->
	<source
		data-srcset="<?= $image->thumb([
            'width'   => 456,
            'height'  => 304,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
		media="--md" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 744,
            'height'  => 496,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--lg" />
	<source
        data-srcset="<?= $image->thumb([
            'width'   => 488,
            'height'  => 325,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xl" />
	<source
        data-srcset="<?= $image->thumb([
            'width'   => 616,
            'height'  => 410,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 744,
            'height'  => 496,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        class="lazyload block w-full <?= $classes ?>"
        alt="<?= $image->alt() ?>" />
</picture>
