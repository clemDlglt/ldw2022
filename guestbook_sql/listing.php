<div>
    <?php foreach ($entries as $entry) { ?>
        <div style="border-bottom: 1px solid;">
            <p><?= $entry['content']; ?></p>
            <div><?= $entry['author']; ?></div>
        </div>
    <?php } ?>
</div>