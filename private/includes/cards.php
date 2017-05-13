<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$hrefLinkVar = '';

use Carbon\Carbon;

if (isset($row['datetime'])) {

    $date = new Carbon($row['datetime']);
    Carbon::setLocale('no');
}

?>

<div class="card mb-3">
    <?php if (isset($row['image_path'])) {
        echo '<img class="card-img-top img-fluid" src="' . $row['image_path'] . '"/>';
    } ?>
    <div class="card-block">
        <h2 class="card-title"><?php echo $row['title'] ?></h2>
        <p class="card-text"><?php echo $row['description'] ?></p>
    </div> <!-- card-block -->
    <div class="card-footer text-muted d-flex justify-content-between">
        <?php

        if (isset($row['address'])) {
            echo '<p>' . $row['address'] . '</p>';
            echo '<p>' . 'Opening Hours:' . $row['opening_hours'] . '</p>';
        }
        if (isset($date)) {
            echo '<p>' . $date->diffForHumans() . '</p>';
        } ?>
        <div class="text-right">
            <div class="btn-group">
                <a href="/admin/manage_<?php echo $row['type']; ?>.php?id=<?php echo $row['id'] ?>" class="btn btn-info"
                   id="edit"><i class="material-icons" style="color: white;">edit</i></a>';
                <a href="/admin/manage_<?php echo $row['type']; ?>.php" class="btn btn-danger">
                    <i class="material-icons" style="color: white;">delete</i>
                </a>';
                <a href="#" class="btn btn-secondary">+</a>
            </div> <!-- btn-group -->
        </div> <!-- text-right -->
    </div> <!-- card-footer -->
</div> <!-- card -->
