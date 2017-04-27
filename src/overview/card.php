<div class="card">
    <img class="card-img-top" src="<?= $e['image_path'] ?>" width="100%">

    <div class="card-block">
        <h2 class="card-title"><?= $e['title'] ?></h2>
        <p class="card-text"><?= $e['description'] ?></p>

        <a href="#" class="btn btn-info">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
    </div>

    <div class="card-footer text-muted">
        <p> <?= $e['datetime'] ?> </p>
    </div
</div>