<hr class="mx-15 border-brand border-t-1 h-0 mb-15" />
<aside id="aside" class="flex flex-row flex-wrap">
<?php foreach($pages->find('widgets')->children() as $widget): ?>
    <section class=" w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-15 pb-30">
        <div class="square">
            <h2 class="text-brand text-base leading-tight font-title font-bold mb-20 uppercase tracking-wider"><?= $widget->title() ?></h2>
            <div><?= $widget->body()->kt() ?></div>
        </div>
    </section>
<?php endforeach; ?>
    <section class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-15 pb-30">
        <?php if (($page->intendedTemplate() != 'contact') && ($page->intendedTemplate() != 'search') ): ?>
            <div class="square">
                <h2 class="text-brand text-base leading-tight font-title font-bold mb-20 uppercase tracking-wider">Rückruf- Wunsch</h2>
                <?php snippet('ui/terminform'); ?>
            </div>
        <?php endif; ?>
    </section>
</aside>
