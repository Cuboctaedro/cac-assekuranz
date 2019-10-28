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
            'width'   => 360,
            'height'  => 240,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xl" />
	<source
        data-srcset="<?= $image->thumb([
            'width'   => 360,
            'height'  => 240,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        media="--xxl" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $image->thumb([
            'width'   => 456,
            'height'  => 304,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>"
        class="lazyload <?= $classes ?>"
        alt="<?= $image->alt() ?>" />
</picture>
