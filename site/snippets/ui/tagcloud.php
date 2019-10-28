<?php

// fetch all tags
$tags = $pages->find('blog')->children()->pluck('tags', ',', true);

?>
<nav class="tagcloud" aria-label="Blog Tags">

    <ul class="tags">

        <?php foreach($tags as $tag): ?>

        <li>

            <a href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>"><?= html($tag) ?></a>

        </li>

        <?php endforeach ?>

    </ul>


</nav>
