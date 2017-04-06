<div class="mdl-card mdl-shadow--2dp">
    <img src="<?= $event['image_path'] ?>" height="200">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?= $event['title'] ?></h2>
    </div>
    <div class="mdl-card__supporting-text timestamp"><?= $event['starts_at']->diffForHumans() ?></div>
    <div class="mdl-card__supporting-text"><?= $event['description'] ?></div>

    <?php if ($event['is_free']) { ?>

        <div class="mdl-card__supporting-text">(Gratis)</div>

    <?php } ?>

    <div class="mdl-card__supporting-text right-aligned">
        <a href="edit-event.php?id=<?= $event['id'] ?>">
            <button class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">edit</i>
            </button>
        </a>
        <a href="delete-event.php?id=<?= $event['id'] ?>">
            <button class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">delete</i>
            </button>
        </a>
    </div>

</div>