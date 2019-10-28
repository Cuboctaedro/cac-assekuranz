<?php
$menupages = $site->pages()->listed();
?>

<nav class="navbar " aria-label="Main navigation" id="nav">

    <button aria-expanded="false" aria-controls="menu-list" class="dropdown-button text-brand inline-block md:hidden text-sm border-none mr-15 mt-15 bg-white" data-toggle-menu="#menulist">
        <span class="hide">Menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" class="icon"/></svg>
    </button>

    <ul class="menulist hidden md:flex absolute md:static flex-col md:flex-row md:justify-end z-5 bg-white shadow-xl md:shadow-none animate" id="menulist">

        <?php foreach ($menupages as $item):?>

            <li class="md:py-10 md:pl-25 text-center">

                <a href="<?= $item->url() ; ?>" class="<?php e($item->isOpen(), ' text-brand_light_1 ', ' text-brand ') ?> no-underline uppercase tracking-wider text-sm block menuitem"><?= $item->title() ; ?></a>

            </li>

    <?php endforeach; ?>

    </ul>

</nav>
