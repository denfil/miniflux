<?= Miniflux\Template\load('search_form', array('text' => '', 'opened' => false)) ?>
<?php if (empty($items)): ?>
    <p class="alert alert-info"><?= t('There are no results for your search') ?></p>
<?php else: ?>
    <div class="page-header">
        <h2><?= $tag_title ?><span id="page-counter"><?= isset($nb_items) ? $nb_items : '' ?></span></h2>
        <ul>
            <?php foreach ($tags as $tag): ?>
            <li><a href="?action=search-tag&tag_id=<?= $tag['id'] ?>"><?= $tag['title'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <section class="items" id="listing">
        <?php foreach ($items as $item): ?>
            <?= Miniflux\Template\load('item', array(
                'item' => $item,
                'menu' => $menu,
                'offset' => $offset,
                'hide' => false,
                'display_mode' => $display_mode,
                'item_title_link' => $item_title_link,
                'favicons' => $favicons,
                'original_marks_read' => $original_marks_read,
            )) ?>
        <?php endforeach ?>

        <?= Miniflux\Template\load('paging', array('menu' => $menu, 'nb_items' => $nb_items, 'items_per_page' => $items_per_page, 'offset' => $offset, 'tag_id' => $tag_id)) ?>
    </section>

<?php endif ?>
