<?php
if(!isset($classes)) {$classes = " ";};
 ?>
<picture>
	<!--[if IE 9]><video style="display: none;><![endif]-->
	<source
		data-srcset="<?= $image->thumb([
            'width'   => 456,
            'quality' => 80
        ])->url() ?>"
		media="--md" />
    <source
        data-srcset="<?= $image->thumb([
            'width'   => 744,
            'quality' => 80
        ])->url() ?>"
        media="--lg" />
	<source
        data-srcset="<?= $image->thumb([
            'width'   => 659,
            'quality' => 80
        ])->url() ?>"
        media="--xl" />
	<source
        data-srcset="<?= $image->thumb([
            'width'   => 936,
            'quality' => 80
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 936,
            'quality' => 80
        ])->url() ?>"
        class="lazyload block w-full <?= $classes ?>"
        alt="<?= $image->alt() ?>" />
</picture>
