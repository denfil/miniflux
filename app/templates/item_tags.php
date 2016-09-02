<div class="item-tags" data-item-id="<?= $item_id ?>">
    <span class="tags-pseudo-link tags-link-edit"><?= t('Edit tags') ?></span>
    <div class="tag-list">
        <?php for ($i = 0, $cnt = count($tags); $i < $cnt; $i++): ?>
        <a href="?action=search-tag&tag_id=<?= $tags[$i]['id'] ?>" data-tag-id="<?= $tags[$i]['id'] ?>"><?= $tags[$i]['title'] ?></a><?php echo $i < $cnt - 1 ? ',' : ''; ?>
        <?php endfor ?>
    </div>
    <div class="item-tag-add">
        <input type="text" placeholder="<?= t('Press Enter to save.') ?>">
        <span class="tags-pseudo-link tags-link-cancel"><?= t('cancel') ?></span>
    </div>
</div>
